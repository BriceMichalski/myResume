TP-devops-docker-symfony-ci  
===================

Practical school work for the implementation of a dockerize symfony stack using php-fpm , mysql and nginx.

Implementation of Continuous integration with travis-ci.

Implementation of Symfony and Nginx Syslog message transmission on UDP.

Prerequisites
------------
- install docker-ce
- install docker-compose

Used docker images
------------
- nginx:1.15.5-alpine
- custom php ( based on php:7.2.11-fpm ) (cf /docker/php/Dockerfile)
- mysql:5.7

Dependency
------------
- tp-devops-docker-monitoring ( cf https://github.com/BriceMichalski/tp-devops-docker-monitoring )


Install
------------
From project path run the following command:
```
$  docker-compose pull
$  make .env
$  docker pull composer/composer
$  docker run --rm -v $(pwd):/app composer/composer install
```
Once done edit .env with your custom variables

Start
------------
```
$  make start
```
and browse http://localhost:8081/

Stop
------------
```
$  make stop
```

Useful links
------------
- nginx : https://nginx.org/en/docs/
- mysql : https://dev.mysql.com/doc/refman/5.7/en/
- php-fpm: http://php.net/manual/en/install.fpm.php
- syslog protocole : https://tools.ietf.org/html/rfc5424#section-6.2.3.1
- monolog Handler : https://github.com/Seldaek/monolog/tree/master/src/Monolog/Handler
- monolog configuration : https://github.com/symfony/monolog-bundle/blob/master/DependencyInjection/Configuration.php
