cd laradock
sudo docker-compose up -d nginx mysql phpmyadmin
sudo docker-compose exec --user=laradock workspace bash
php artisan make:model Post -mc
php artisan migrate
php artisan make:request StoreUpdatePost
php artisan migrate:refresh
composer require laravel/breeze --dev
php artisan make:migration add_date_to_table
