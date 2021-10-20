FROM alpine:3.12


RUN apk update
RUN apk upgrade
RUN apk add vim
RUN apk add nginx
RUN apk add php7 php7-fpm php7-curl php7-json php7-mysqli php7-gd \
			php7-phar php7-ctype php7-iconv php7-dom php7-zip \
			php7-exif php7-fileinfo php7-mbstring php7-imagick

RUN apk add supervisor

RUN apk add wget
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xf latest.tar.gz
RUN rm -f latest.tar.gz

RUN adduser -D -g 'www' www

RUN mkdir /www
RUN mv wordpress /www/wordpress

RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf.orig
COPY nginx.conf /etc/nginx/nginx.conf

COPY wp-config.php /www/wordpress

COPY init_service.sh /
RUN chmod +x init_service.sh
RUN mkdir -p /run/nginx

COPY supervisord.conf /etc

RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www

EXPOSE 5050
CMD ["./init_service.sh"]
