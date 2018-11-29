# FROM httpd:latest

# ADD default.conf /etc/apache2/sites-enabled/000-default.conf

FROM nginx:latest

ADD vhost.conf /etc/nginx/conf.d/default.conf