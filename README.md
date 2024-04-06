お問い合わせフォーム


環境構築

Docker ビルド

docker-compose up -d --build


Laravel環境構築

docker-compose exec php bash

composer create-project "laravel/laravel=8.*" . --prefer-dist


マイグレーション

php artisan make:migration create_contacts_table

php artisan make:migration create_categories_table

php artisan make:migration create_users_table


シーディング

php artisan make:seederContactsTableSeeder

php artisan make:seeder CategoriesTableSeeder

php artisan make:seeder UsersTableSeeder


使用技術

PHP7.4.9

laravel3.8

mysql8.0.26

HTML
CSS
URL
開発環境:http://localhost/
phpMyAdmin:http://localhost:8080/
