FROM alpine:3.12
# install
RUN apk update && apk upgrade
RUN apk add vim
RUN apk add grafana --repository http://dl-cdn.alpinelinux.org/alpine/v3.13/community/

# copy configs and scripts
COPY grafana.db /usr/share/grafana/data/grafana.db

COPY init_service.sh /
RUN chmod +x /init_service.sh

EXPOSE 3000
CMD ["/init_service.sh"]
