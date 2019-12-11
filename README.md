# A simple dockerised symfony app (with php7.3, mysql5.7, nginx and SF5)

This app contains 3 url :

 * `127.0.0.1/dummies` to list all the dummy entries in the db
 * `127.0.0.1/dummies/{id}` to fetch a dummy entry via its id
 * `127.0.0.1/dummy/new` to generate a new dummy entry
 
## Get started

| WARNING: Be sure that you have a docker desktop instance running |
| --- |

| WARNING: If services are already listening on the ports 80 and 3306 of your machine, please close them. |
| --- |

`git clone https://www.github.com/deozza/docker-test-sf`

`cd docker-test-sf5`

`docker-compose build`

`docker-compose up -d`

`docker-compose exec php -u root composer install`

`docker-compose exec php -u root bin/console d:s:c`

The dockerised app will be available on `http://localhost`.

## Useful docker commands

### To build custom images 

```docker-compose build --no-cache```

### To launch containers

```docker-compose up -d```

### To check states of launched containers 

```docker ps```

### To execute a command inside a container

```docker-compose exec <container name or service name> -u <user> <command>```

Exemple to create doctrine schema :

```docker-composer exec php -u root bin/console d:s:c```

Exemple to enter inside the container as a user :

```docker-composer exec php -u root bash```

### To stop all containers

```docker-composer stop```

### To remove a particular image

```docker rmi <image name>```

### To remove a particular container

```docker rm <container name>```

### To remove all images and containers

```docker system prune -a```
