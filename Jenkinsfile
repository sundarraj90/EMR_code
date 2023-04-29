pipeline {
    agent any
    stages {
        stage('Clone and Deploy') {
            steps {
                script {
                    def www_dir = "/var/www/html"
                    def www_new_app_dir = "$www_dir/deploy_24042023"
                    sh "sudo rm -rf $www_new_app_dir"
                    sh "git clone https://github.com/sundarraj90/EMR_code.git $www_new_app_dir"
                    sh "cd $www_new_app_dir"
                    sh "sudo cp $www_dir/deploy_24042023/.env_example $www_dir/deploy_24042023/.env"
                    sh "sudo mkdir -p $www_new_app_dir/storage/framework/"
                    sh "sudo cp -R $www_dir/deploy_24042023/storage/framework/sessions/ $www_new_app_dir/storage/framework/"
                    sh "sudo cp -R $www_dir/deploy_24042023/storage/app/ $www_new_app_dir/storage/"
                    sh "sudo chmod -R 770 $www_new_app_dir/"
                }
            }
        }
        stage('Install Dependencies') {
            steps {
                script {
                    sh "sudo apt install software-properties-common"
                    sh "sudo add-apt-repository ppa:ondrej/php"
                    sh "sudo apt update"
                    sh "sudo apt-get install -y php8.1-cli php8.1-common php8.1-mysql php8.1-zip php8.1-gd php8.1-mbstring php8.1-curl php8.1-xml php8.1-bcmath"
                    sh "sudo php -r 'copy(\"https://getcomposer.org/installer\", \"composer-setup.php\");'"
                    sh "sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer"
                    sh "sudo php -r 'unlink(\"composer-setup.php\");'"
                    sh "sudo apt-get install nodejs npm -y"
                }
            }
        }
        stage('Permissions Setup') {
            steps {
                script {
                    def www_dir = "/var/www/html"
                    def www_new_app_dir = "$www_dir/deploy_24042023"
                    sh "sudo find $www_new_app_dir -type f -not -path \"${www_new_app_dir}/storage/*\" -not -path \"${www_new_app_dir}/bootstrap/cache/*\" -exec chmod 664 {} \\;"
                    sh "sudo find $www_new_app_dir -type d -exec chmod 775 {} \\;"
                    sh "sudo chmod -R ug+rwx $www_new_app_dir/storage $www_new_app_dir/bootstrap/cache"
                    sh "sudo chgrp -R www-data $www_new_app_dir/storage $www_new_app_dir/bootstrap/cache"
                    sh "sudo setfacl -R -dm \"g:www-data:rw\" $www_new_app_dir/storage"
                    sh "sudo setfacl -R -dm \"g:www-data:rw\" $www_new_app_dir/bootstrap"
                }
            }
        }
        stage('Composer Install') {
            steps {
                script {
                    def www_dir = "/var/www/html"
                    def www_new_app_dir = "$www_dir/deploy_24042023"
                    sh "cd $www_new_app_dir"
                    sh "if [ \"$EUID\" -eq 0 ]; then echo \"Do not run Composer as root/super user!\"; echo \"Please run this script as a non-root user.\"; exit; fi"
                   
                }
            }
        }
    }
