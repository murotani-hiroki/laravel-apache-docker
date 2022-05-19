FROM php:7.4-apache

# DocumentRootの指定及び、AllowOverride All を指定した confファイル を配布。
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# mod_rewrite モジュールを有効にする。
RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load

# postgreSQLのドライバーをインストール
RUN apt-get update && \
    apt-get -y install libpq-dev && \
    docker-php-ext-install pdo_pgsql && \
    pecl install xdebug && docker-php-ext-enable xdebug

