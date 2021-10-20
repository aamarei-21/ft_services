#!/bin/sh
sed -i "s|.*bind-address\s*=.*|bind-address=0.0.0.0|g" /etc/my.cnf.d/mariadb-server.cnf
sed -i "s|.*skip-networking.*|skip-networking=false|g" /etc/my.cnf.d/mariadb-server.cnf
/etc/init.d/mariadb setup
openrc default
rc-service mariadb start
# create database
echo "create database wordpress default character set utf8 collate utf8_unicode_ci" | mysql
echo "create user 'aamarei'@'%' identified by 'aamarei'" | mysql
echo "grant all on wordpress.* to 'aamarei'@'%'" | mysql
echo "flush privileges" | mysql
mysql wordpress < wordpress.sql
rc-service mariadb stop
mysqld_safe --datadir=/var/lib/mysql/
