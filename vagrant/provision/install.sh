#!/usr/bin/env bash

sudo apt-get -y update
sudo apt-get -y upgrade
##Mariadb
sudo apt-get -y install mariadb-server
service mariadb start
systemctl enable mariadb
##NGINX
sudo apt-get -y install nginx
service nginx start
systemctl enable nginx
##PHP5
sudo apt-get -y install php7.0 php7.0-fpm php7.0-mysql php7.0-json php7.0-xdebug
service php7.0-fpm start 
systemctl enable  php7.0-fpm
##Other
sudo apt-get -y install unzip
