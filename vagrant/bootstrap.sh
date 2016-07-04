#!/usr/bin/env bash
sudo apt-get update
sudo apt-get install python-software-properties -y
sudo add-apt-repository ppa:ondrej/php5-5.6
sudo apt-get update 
sudo apt-get install -y apache2-bin php5-common php5-cli libapache2-mod-php5 php-pear libmysqlclient18 mysql-common php5-mysql php5-intl
sudo ln -s /vagrant/ /var/www/html/
