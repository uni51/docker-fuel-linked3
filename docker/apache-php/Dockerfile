FROM centos:7

RUN yum -y update

RUN yum -y install epel-release \
 && rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm \
 && yum -y install --enablerepo=remi,remi-php73 php \
php-opcache php-devel php-mbstring php-mcrypt php-mysqlnd php-phpunit-PHPUnit \
php-pecl-xdebug php-gd php-intl php-symfony php-pdo php-xml php-tokenizer php-pear php-zip

# composerのインストール
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

CMD ["/usr/sbin/httpd","-D","FOREGROUND"]

WORKDIR /var/www/html