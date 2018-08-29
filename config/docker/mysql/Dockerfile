FROM mysql:5.7

COPY ./backups/mysql/centaura.sql /docker-entrypoint-initdb.d/centaura.sql
COPY ./config/docker/mysql/users.sql /docker-entrypoint-initdb.d/users.sql

