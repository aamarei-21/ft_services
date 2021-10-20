FROM alpine:3.12


RUN apk update
RUN apk upgrade
RUN apk add vim
RUN apk add nginx
RUN apk add php7 php7-fpm php7-curl php7-json php7-mysqli php7-gd \
			php7-phar php7-ctype php7-iconv php7-dom php7-zip php7-session \
			php7-exif php7-fileinfo php7-mbstring php7-imagick

RUN apk add supervisor

RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.tar.gz
RUN tar -xf phpMyAdmin-5.0.1-all-languages.tar.gz
RUN rm -f *.tar.gz


RUN adduser -D -g 'www' www

RUN mkdir /www
RUN mv phpMyAdmin-5.0.1-all-languages /www/phpmyadmin
#RUN mv wordpress /www/wordpress

RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf.orig
COPY nginx.conf /etc/nginx/nginx.conf

RUN mv /www/phpmyadmin/config.sample.inc.php /www/phpmyadmin/config.orig.inc.php
COPY config.inc.php /www/phpmyadmin

COPY init_service.sh /
RUN chmod +x init_service.sh
RUN mkdir -p /run/nginx

COPY supervisord.conf /etc

RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www

EXPOSE 5000
CMD ["./init_service.sh"]
