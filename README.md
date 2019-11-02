# elara

### Build
     ./composer.phar install && cp .env.example .env && sed -i "s/DB_HOST=127.0.0.1/DB_HOST=elaradb/g" .env && php artisan key:generate && php artisan migrate && php artisan db:seed && vendor/bin/phpunit --log-junit test.xml -c phpunit.xml

### Other
#### Generade models reliese/laravel
    php artisan code:models --table=addresses
 	php artisan code:models --table=catalog_items
    php artisan code:models --table=catalog_pictures
    php artisan code:models --table=catalogs
    php artisan code:models --table=categories
    php artisan code:models --table=category_pictures
    php artisan code:models --table=clients
    php artisan code:models --table=currencies
    php artisan code:models --table=features
    php artisan code:models --table=manufacturers
    php artisan code:models --table=migrations
    php artisan code:models --table=order_statuses
    php artisan code:models --table=orders
    php artisan code:models --table=prices
    php artisan code:models --table=product_features
    php artisan code:models --table=product_pictures
    php artisan code:models --table=products
    php artisan code:models --table=routes
    php artisan code:models --table=shippings
    php artisan code:models --table=static_pages

#### Generade seed orangehill/iseed
    php artisan iseed addresses
    php artisan iseed catalog_items
    php artisan iseed catalog_pictures
    php artisan iseed catalogs
    php artisan iseed categories
    php artisan iseed category_pictures
    php artisan iseed clients
    php artisan iseed currencies
    php artisan iseed features
    php artisan iseed manufacturers
    php artisan iseed migrations
    php artisan iseed order_statuses
    php artisan iseed orders
    php artisan iseed prices
    php artisan iseed product_features
    php artisan iseed product_pictures
    php artisan iseed products
    php artisan iseed routes
    php artisan iseed shippings
    php artisan iseed static_pages

#### Generade migration Xethron/migrations-generator 
    php artisan migrate:generate
