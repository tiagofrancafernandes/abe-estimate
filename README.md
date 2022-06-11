# Demo-Laravel-CRUD
> [EN] Example of a basic Crud in Laravel presented to a private student.
>
> [PT] Exemplo de um crud básico em Laravel apresentado para um aluno particular.

## Using

```sh
## 1 - environment file
cp .env.example .env

## 2
composer install

## 3 - Set to use your favorite SGDB (postgres, mysql, etc) or use SQLite
DB_CONNECTION=sqlite
# DB_CONNECTION=pgsql
# DB_HOST=127.0.0.1
# DB_PORT=5432
# DB_DATABASE=postgres
# DB_USERNAME=postgres
# DB_PASSWORD=postgres

## 4 - Run migrations to create DB structure
php artisan migrate --step --seed

## 5 - Serve your appplication
php artisan serve

## 6 - Go to browser
# http://127.0.0.1:8000/users
```
