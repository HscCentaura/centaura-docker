FROM wordpress:latest

WORKDIR /var/www/html

MAINTAINER Stijn Van Hulle

RUN docker-php-ext-install pdo pdo_mysql

#COPY ./centaura.be/ /usr/src/wordpress/

COPY ./centaura.be/propraesidia /usr/src/wordpress/propraesidia
#COPY ./centaura.be/wp-content /usr/src/wordpress/wp-content

