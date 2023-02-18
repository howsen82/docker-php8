FROM php:8.1.16-apache

ENV TZ="Asia/Kuala_Lumpur"

COPY . /var/www/html

# docker build -t hello-world-php .
# docker run -d --name hello-world-php -p 8080:80 hello-world-php
# docker container stop hello-world-php
# docker rm hello-world-php