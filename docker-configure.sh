#!/bin/bash

echo "Ensuring proper volume permissions."

# create storage dirs
mkdir -p /var/www/storage/app/public
mkdir -p /var/www/storage/framework/{cache,sessions,testing,views}
mkdir -p /var/www/storage/logs

# set permissions
chmod -R 775 /var/www/storage
chown -R www-data:www-data /var/www/storage
