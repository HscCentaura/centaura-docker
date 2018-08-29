FROM ubuntu

ENV ADMIN_PASSWORD admin
ENV ODOO_DB_NAME odoo
ENV BACKUP_TIME 0 3 * * *

MAINTAINER Stijn Van Hulle

RUN apt-get update && \
    apt-get install curl cron bzip2 -y && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* && \
    mkdir /backups

COPY ./config/docker/odoo_backup/docker-entrypoint.sh /entrypoint.sh
COPY ./config/docker/odoo_backup/backup /bin/
COPY ./config/docker/odoo_backup/restore /bin/

RUN chmod +x entrypoint.sh
RUN chmod +x /bin/backup
RUN chmod +x /bin/restore

VOLUME /backups

ENTRYPOINT ["sh","/entrypoint.sh"]

CMD ["cron", "-f"]