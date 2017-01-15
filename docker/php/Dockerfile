FROM php:7.0

RUN apt-get update && \
    apt-get install -y freetds-dev wget git

RUN ln -s /usr/lib/x86_64-linux-gnu/libsybdb.a /usr/lib/ && \
    docker-php-ext-install pdo_dblib

ADD composer-setup.sh /
RUN chmod +x /composer-setup.sh && \
    /composer-setup.sh

WORKDIR /data/

CMD ['php']
