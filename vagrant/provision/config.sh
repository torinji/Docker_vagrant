#!/usr/bin/env bash
sudo cp -rf /share/nginx/* /etc/nginx/
cd /var/www/
cp /share/wordpress.zip ./
unzip wordpress.zip
rm wordpress.zip
service nginx restart
