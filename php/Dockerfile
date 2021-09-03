
FROM php:7.3-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli
EXPOSE 80

RUN mkdir /var/www/html/joomla
RUN wget https://github.com/joomla/joomla-cms/releases/download/3.9.28/Joomla_3.9.28-Stable-Full_Package.tar.gz
RUN tar xvf Joomla_3.9.28-Stable-Full_Package.tar.gz -C /var/www/html/joomla



  