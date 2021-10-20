FROM alpine:3.12
# install

RUN apk update && apk upgrade
RUN apk add vim
RUN apk add vsftpd vsftpd-doc openssl

# copy configs and scripts
RUN mv /etc/vsftpd/vsftpd.conf /etc/vsftpd/vsftpd.conf.bak
COPY vsftpd.conf /etc/vsftpd/
#
COPY init_service.sh /
RUN chmod +x /init_service.sh

# for 20/21
EXPOSE 21 20 30021 30020
CMD ["/init_service.sh"]
