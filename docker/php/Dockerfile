FROM php:7.4

# Install basic packages and extensions
RUN apt-get update \
  && apt-get install -y zlib1g-dev libzip-dev wget gnupg \
  && docker-php-ext-install zip opcache

# Composer install
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# Install SQL Server extensions
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add -
RUN curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list
RUN apt-get update
RUN ACCEPT_EULA=Y apt-get install -y msodbcsql17 mssql-tools
RUN apt-get install -y unixodbc-dev libgssapi-krb5-2
RUN pecl install sqlsrv
RUN pecl install pdo_sqlsrv
RUN docker-php-ext-enable sqlsrv
RUN docker-php-ext-enable pdo_sqlsrv

CMD ['php']
