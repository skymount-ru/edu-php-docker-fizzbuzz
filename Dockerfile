FROM php:7.4-apache
RUN a2enmod rewrite
COPY ./ /var/www
EXPOSE 80/tcp
