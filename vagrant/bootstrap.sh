#!/usr/bin/env bash
sudo apt-get update
sudo apt-get install python-software-properties -y
sudo add-apt-repository ppa:ondrej/php5-5.6
sudo apt-get update 
sudo apt-get install -y apache2-bin php5-common php5-cli libapache2-mod-php5 php-pear libmysqlclient18 mysql-common php5-mysql php5-intl
sudo a2enmod rewrite
sudo ln -s /vagrant/ /var/www/html/
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
cd /var/www/html/vagrant/Cake_Engineering/cake_web
composer install
sudo chmod 777 -R /var/www/html/vagrant/Cake_Engineering/cake_web
sudo chmod -R 777 /tmp
sudo service apache2 restart
