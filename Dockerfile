#utiliza bash debian
FROM debian
#file criado por jefferson nunes fonseca
MAINTAINER jeffersonnunesfonseca@gmail.com 
#instala apache , php, mysql e comandos basicos
RUN apt-get update && apt-get install apache2 -y && apt-get install net-tools -y && apt-get install php -y && apt-get install php-mysql -y &&  apt-get clean

#seta variaveis para apache
ENV APACHE_LOCK_DIR ="/var/lock"
ENV APACHE_PID_FILE ="/var/run/apache2.pid"
ENV APACHE_RUN_USER ="www-data"
ENV APACHE_RUN_GROUP ="www-data"
ENV APACHE_LOG_DIR ="/var/log/apache2"

#label
LABEL Description ="ProjetoLaravel"

#removo index padrao do apache
RUN rm /var/www/html/index.html

#adiciono extensão do mysql no php.ini
RUN echo "extension=php_mysqli.dll" >> /etc/php/7.0/apache2/php.ini

RUN echo "<VirtualHost *:80>" >> /etc/apache2/sites-available/000-default.conf
RUN echo "      ServerName laravel" >> /etc/apache2/sites-available/000-default.conf
RUN echo "      DocumentRoot /var/www/html/estudos/public" >> /etc/apache2/sites-available/000-default.conf 
RUN echo "</VirtualHost>" >> /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/

##sasasasaasas


#porta 80
EXPOSE 80
ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
