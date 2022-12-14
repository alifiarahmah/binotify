FROM ubuntu:jammy

# SET TZ
ENV TZ=Asia/Jakarta
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# BLOCK Update
RUN apt update
RUN apt install software-properties-common -y
# END BLOCK

# BLOCK Install PHP
RUN add-apt-repository ppa:ondrej/php -y
RUN apt install php php-fpm php-pgsql -y
# END BLOCK

# BLOCK Install softwares
RUN apt install apache2 supervisor -y
# END BLOCK

# BLOCK Configure supervisor and AllowOverride apache2
ADD supervisor-apache2.conf /etc/supervisor/conf.d/supervisor-apache2.conf
RUN a2enmod rewrite
RUN sed -i -r 's/AllowOverride None$/AllowOverride All/' /etc/apache2/apache2.conf
# END BLOCK

# COPY files
ADD app /var/www/html/app
ADD public /var/www/html/public
COPY .htaccess /var/www/html/
COPY index.php /var/www/html/
RUN rm /var/www/html/index.html
# END COPY

EXPOSE 80
CMD ["supervisord", "-n"]
