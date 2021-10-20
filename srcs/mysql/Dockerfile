FROM alpine:3.12
# install
RUN apk update && apk upgrade
RUN apk add vim
RUN apk add mariadb mariadb-common mariadb-client \
	openrc
RUN rc-status
RUN touch /run/openrc/softlevel

COPY wordpress.sql /
# copy configs and scripts
COPY init_service.sh /
RUN chmod +x /init_service.sh
RUN mkdir -p /run/mysqld
RUN chown -R mysql /run/mysqld
# MySQL port
EXPOSE 3306
CMD ["/init_service.sh"]
