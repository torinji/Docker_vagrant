FROM debian:stretch

RUN apt-get update && apt-get -y install php7.0 php7.0-fpm php7.0-mysql php7.0-json php7.0-xdebug nginx 
RUN service php7.0-fpm start
COPY nginx.conf /etc/nginx/sites-available/default
RUN service nginx start
COPY wp.tar.gz  /var/www/
RUN mkdir -p /var/www/ && tar -xzf "/var/www/wp.tar.gz" -C "/var/www/" && rm /var/www/wp.tar.gz 
COPY wp-config.php /var/www/wordpress/
EXPOSE 80
RUN service nginx restart
COPY docker-entrypoint.sh /usr/local/bin/
ENTRYPOINT ["docker-entrypoint.sh"]

CMD ["nginx", "-g", "daemon off;"]
