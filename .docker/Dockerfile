FROM php:7.3-apache
COPY . /www
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /www && a2enmod rewrite
