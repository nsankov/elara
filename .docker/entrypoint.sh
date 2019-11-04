#!/usr/bin/env bash
cd /var/www/html && ./composer.phar install && cp .env.example .env && sed -i "s/DB_HOST=127.0.0.1/DB_HOST=elaradb/g" .env && php artisan key:generate && php artisan migrate && php artisan db:seed && vendor/bin/phpunit --log-junit test.xml -c phpunit.xml
