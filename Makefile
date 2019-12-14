.PHONY:
install-deps:
		docker-compose run --rm php composer install

create-entity:
		docker exec -it my_resume_php_1 /bin/bash

.env:
		cp .env.dist .env

.PHONY:
start:
		docker-compose up -d

.PHONY:
stop:
		docker-compose stop

