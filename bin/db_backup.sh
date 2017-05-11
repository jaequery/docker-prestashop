#!/bin/bash

docker exec -it glo_db_1 mysqldump --user=root --password=changeme lemp > backup.sql
