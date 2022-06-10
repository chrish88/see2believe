FROM nginx:1.21.6

ADD ./nginx/default.conf/ /etc/nginx/conf.d/default.conf
ADD ./nginx/certs /etc/nginx/certs/self-signed
