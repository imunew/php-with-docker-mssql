# php-with-docker-mssql
[![CircleCI](https://circleci.com/gh/imunew/php-with-docker-mssql.svg?style=svg)](https://circleci.com/gh/imunew/php-with-docker-mssql)  
This is an example project uses [microsoft-mssql-server](https://hub.docker.com/_/microsoft-mssql-server).

## Install Docker
- [Get Started with Docker | Docker](https://www.docker.com/get-started).

## Build and run docker container
```bash
$ docker-compose up -d
```

## composer install
```bash
$ docker-compose run php composer install
```

## Database migration
```bash
$ docker-compose run php php app/bootstrap.php
```

## Run test
```bash
$ docker-compose run php vendor/bin/phpunit
```
