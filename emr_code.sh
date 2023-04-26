#!/bin/bash

www_dir=/var/www/html
www_new_app_dir=$www_dir/deploy_24042023


git clone https://github.com/sundarraj90/EMR_code.git $www_new_app_dir
cd $www_new_app_dir


sudo cp $www_dir/EMR_code/.env_example $www_new_app_dir
sudo mkdir -p $www_new_app_dir/storage/framework/
sudo cp -R $www_dir/EMR_code/storage/framework/sessions/ $www_new_app_dir/storage/framework/
sudo cp -R $www_dir/EMR_code/storage/app/ $www_new_app_dir/storage/

sudo chmod -R 770 $www_new_app_dir/

# Next commands shall not run as root!!!
#sudo apt-get install php-cli php-zip unzip -y
sudo apt-get install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath

# Download and install Composer
sudo php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Cleanup
sudo php -r "unlink('composer-setup.php');"
#composer install --optimize-autoloader --no-dev

sudo apt-get install nodejs npm -y
#npm run prod

# owner is jenkins group www-data
sudo find $www_new_app_dir -type f -not -path "${www_new_app_dir}/storage/*" -not -path "${www_new_app_dir}/bootstrap/cache/*" -exec chmod 664 {} \;  # chmod for files
sudo find $www_new_app_dir -type d -exec chmod 775 {} \;  # chmod for directories

# User www-data needs to have rwx permission in storage and cache directories
sudo chmod -R ug+rwx $www_new_app_dir/storage $www_new_app_dir/bootstrap/cache
sudo chgrp -R www-data $www_new_app_dir/storage $www_new_app_dir/bootstrap/cache
# This should solve problem with 644 permission in session and cache
# which cause a problem with delete old repository
sudo setfacl -R -dm "g:www-data:rw" $www_new_app_dir/storage
sudo setfacl -R -dm "g:www-data:rw" $www_new_app_dir/bootstrap

#mv $www_dir/mydomain.eu $www_old_app_dir

sudo mv $www_new_app_dir $www_dir/EMR_code

cd $www_dir/EMR_code
composer install -y
# After rename to final destination name because cache stores the full paths
sudo php artisan migrate
sudo php artisan config:cache
sudo php artisan route:cache
sudo php artisan view:cache

sudo php artisan storage:link

# Possible problem cause jenkins user as memeber of group www-data is not able to delete
# files with chmod 644 and Laravel generates files with chmod 644 by default as www-data.
# This should solve command setfacl above
#rm -rf $www_old_app_dir

echo "----------------------------------------------------------"
echo " DEPLOY IS DONE. CHECK ERROR MESSAGES. "
echo "----------------------------------------------------------"
