FROM php:7.4-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
RUN service apache2 restart
COPY ./ /var/www/html/