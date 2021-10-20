#minikube start --vm-driver=virtualbox
minikube --vm-driver=virtualbox start --cpus 2 --memory 3000

minikube addons enable metallb
kubectl apply -f srcs/metallb/configmap.yaml
eval $(minikube docker-env)

docker build -t nginx_img ./srcs/nginx
kubectl apply -f ./srcs/nginx/nginx.yaml

docker build -t wp_img ./srcs/wordpress
kubectl apply -f srcs/wordpress/wp.yaml

docker build -t sql_img ./srcs/mysql
kubectl apply -f srcs/mysql/mysql-pv.yaml
kubectl apply -f srcs/mysql/mysql.yaml

docker build -t phpma_img ./srcs/phpma
kubectl apply -f srcs/phpma/phpma.yaml

docker build -t ftps_img ./srcs/ftps
kubectl apply -f srcs/ftps/ftps-pv.yaml
kubectl apply -f srcs/ftps/ftps.yaml

docker build -t influxdb_img ./srcs/influxdb
kubectl apply -f srcs/influxdb/influxdb-pv.yaml
kubectl apply -f srcs/influxdb/influxdb.yaml

docker build -t telegraf_img ./srcs/telegraf
kubectl apply -f srcs/telegraf/telegraf.yaml

docker build -t grafana_img ./srcs/grafana
kubectl apply -f srcs/grafana/grafana.yaml


