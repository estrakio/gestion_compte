FROM php:apache


RUN apt-get update 
RUN apt-get upgrade -y

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod uga+x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo_pgsql && \
    install-php-extensions pgsql &&\
    install-php-extensions xdebug

RUN mkdir /var/www/html/upload &&\
    chown www-data /var/www/html/upload &&\
    chmod 755 /var/www/html/upload

RUN mkdir /gestion_compte
COPY .. /gestion_compte
COPY ./php.ini /usr/local/etc/php/