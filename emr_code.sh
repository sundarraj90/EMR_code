#!/bin/bash

www_dir=/var/www
www_new_app_dir=$www_dir/deploy_24042023
#www_old_app_dir=$www_dir/deploy-old-mydomain.eu


git clone https://github.com/sundarraj90/EMR_code.git $www_new_app_dir
cd $www_new_app_dir


#cp $www_dir/mydomain.eu/.env $www_new_app_dir
cp $www_dir/EMR_code/.env_examples $www_new_app_dir
mkdir -p $www_new_app_dir/storage/framework/
cp -R $www_dir/EMR_code/storage/framework/sessions/ $www_new_app_dir/storage/framework/
cp -R $www_dir/EMR_code/storage/app/ $www_new_app_dir/storage/

chmod -R 770 $www_new_app_dir/

# Next commands shall not run as root!!!
composer install --optimize-autoloader --no-dev

npm install
npm run prod

# https://stackoverflow.com/questions/30639174/how-to-set-up-file-permissions-for-laravel
# https://vijayasankarn.wordpress.com/2017/02/04/securely-setting-file-permissions-for-laravel-framework/
# https://linuxconfig.org/how-to-explicitly-exclude-directory-from-find-command-s-search
# owner is jenkins group www-data
find $www_new_app_dir -type f -not -path "${www_new_app_dir}/storage/*" -not -path "${www_new_app_dir}/bootstrap/cache/*" -exec chmod 664 {} \;  # chmod for files
find $www_new_app_dir -type d -exec chmod 775 {} \;  # chmod for directories

# User www-data needs to have rwx permission in storage and cache directories
chmod -R ug+rwx $www_new_app_dir/storage $www_new_app_dir/bootstrap/cache
chgrp -R www-data $www_new_app_dir/storage $www_new_app_dir/bootstrap/cache
# https://www.geeksforgeeks.org/access-control-listsacl-linux/
# This should solve problem with 644 permission in session and cache
# which cause a problem with delete old repository
setfacl -R -dm "g:www-data:rw" $www_new_app_dir/storage
setfacl -R -dm "g:www-data:rw" $www_new_app_dir/bootstrap

#mv $www_dir/mydomain.eu $www_old_app_dir

mv $www_new_app_dir $www_dir/EMR_code

cd $www_dir/EMR_code
# After rename to final destination name because cache stores the full paths
php artisan migrate
php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan storage:link

# Possible problem cause jenkins user as memeber of group www-data is not able to delete
# files with chmod 644 and Laravel generates files with chmod 644 by default as www-data.
# This should solve command setfacl above
#rm -rf $www_old_app_dir

echo "---------------------------------------------------"
echo " DEPLOY IS DONE. CHECK ERROR MESSAGES. "
echo "---------------------------------------------------"
