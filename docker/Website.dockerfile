FROM php:7.3.22-apache-stretch

COPY ./ /var/www/html

RUN apt install -y apache2 

WORKDIR /var/www/html

EXPOSE 80