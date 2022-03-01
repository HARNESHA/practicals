#!/bin/bash

set -e

DB=test
BACKUP_NAME="$DB"_"$(date +%y%m%d_%H%M%S)"


date
echo "Backing up MongoDB database to /tmp directory"

echo "Dumping MongoDB $DB database"
mongodump --db $DB --host=127.0.0.1:27017 --out=/tmp -u admin -p 123456

sudo mkdir -p /var/backup/$BACKUP_NAME

echo "Copying moving backup to /var/backup directory"
mv  /tmp/$DB /var/backup/$BACKUP_NAME

echo 'Backup complete!'
cd /var/backup
rm -r `ls -t /var/backup/ | awk 'NR>5'`

