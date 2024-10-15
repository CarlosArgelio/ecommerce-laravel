#!/bin/bash

# Run artisan commands in the container

alias artisan='docker-compose exec php php /var/www/html/artisan'