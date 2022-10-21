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

ADD apache2.conf /etc/supervisor/conf.d/apache2.conf
COPY .htaccess /var/www/html/
COPY index.php /var/www/html/
ADD views /var/www/html/
RUN rm /var/www/html/index.html
EXPOSE 80
CMD ["supervisord", "-n"]
