FROM alpine:3.12
# install
RUN apk update && apk upgrade
RUN apk add vim
RUN apk add influxdb --repository=http://dl-cdn.alpinelinux.org/alpine/v3.10/community/


# copy configs and scripts
COPY init_service.sh /
RUN chmod +x /init_service.sh

# InfluxDB port
EXPOSE 8086
CMD ["/init_service.sh"]
