# php-with-docker-mssql
This is an example project uses '[mssql-server-linux](https://hub.docker.com/r/microsoft/mssql-server-linux/)'.

## Install Docker
- '[Get Docker | Docker](https://www.docker.com/products/overview)'.

## Build and run docker container
- `$ docker-compose up -d`

## composer install
- `$ docker-compose run php composer install`

## Database migration
- `$ docker-compose run app/bootstrap.php`

## Run test
- `$ docker-compose run vendor/bin/phpunit`
