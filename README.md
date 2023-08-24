## Initial setup

```sh
composer install

cp .env.example .env

touch database/database.sqlite

php artisan migrate:fresh --seed

php artisan storage:link

php artisan serve
```

The site should be available locally on [localhost:8000](http://localhost:8000)

You can log into the admin at [localhost:8000/admin](http://localhost:8000/admin) with the following credentials:

- Email: `admin@test.test`
- Password: `admin@test.test`
