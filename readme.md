# BokunoLumen

## install

```
php composer.phar install
php artisan ide-helper:generate
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan migrate:refresh --seed

npm install
```

## start server

```
php -S localhost:8000 -t ./public
```

## test

```
php vendor/bin/phpunit tests/
```

