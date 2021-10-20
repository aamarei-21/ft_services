#!/bin/sh
# create user
adduser -D aamarei
echo "aamarei:aamarei" | chpasswd
echo aamarei > /etc/vsftpd.userlist
mkdir -p /home/aamarei/ftp
chown nobody:nogroup /home/aamarei/ftp
chmod a-w /home/aamarei/ftp
mkdir -p /home/aamarei/ftp/files
chown aamarei:aamarei /home/aamarei/ftp/files
# create sertificate
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.crt \
	-subj "/C=RU/ST=TATARSTAN/L=KAZAN/O=SBER/OU=21SCHOOL/CN=aamarei"
chmod +r /etc/vsftpd/vsftpd.conf
vsftpd etc/vsftpd/vsftpd.conf
