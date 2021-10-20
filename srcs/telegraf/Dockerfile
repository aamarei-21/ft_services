FROM alpine:3.12
# install
RUN apk update && apk upgrade
RUN apk add vim
RUN apk add telegraf --repository http://dl-3.alpinelinux.org/alpine/edge/community/

# copy configs and scripts
RUN mkdir /etc/telegraf
COPY telegraf.conf /etc/telegraf/

COPY init_service.sh /
RUN chmod +x /init_service.sh

CMD ["/init_service.sh"]
