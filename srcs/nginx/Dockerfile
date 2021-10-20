FROM alpine:3.12


RUN apk update
RUN apk upgrade
RUN apk add vim
RUN apk add nginx openssl


RUN adduser -D -g 'www' www

RUN mkdir /www
RUN chown -R www:www /var/lib/nginx
RUN chown -R www:www /www

#COPY ./srcs/default /etc/nginx/nginx.conf

RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf.orig
COPY nginx.conf /etc/nginx/nginx.conf
COPY index.html /www

# certificate SSL
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/ssl/private/nginx-selfsigned.key -out //etc/ssl/certs/nginx-selfsigned.crt \
	-subj "/C=RU/ST=TATARSTAN/L=KAZAN/O=SBER/OU=21SCHOOL/CN=aamarei"

COPY init_service.sh /
RUN chmod +x init_service.sh
RUN mkdir -p /run/nginx

EXPOSE 80 443
CMD ["./init_service.sh"]
