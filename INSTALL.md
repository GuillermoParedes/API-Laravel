# Instalar el proyecto Laravel API
# Versión 1.
## Requisitos

El proyecto utiliza las tecnologias de:

* PHP 7
* Composer
* Laravel 5.6
* Postgres


## Configuración de .ENV

Ingresar las variables de acuerdo a su entorno de desarrollo, en este caso se esta utilizando como Base de Datos Postgres.

```php

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=api_laravel
DB_USERNAME=user_database
DB_PASSWORD=password_database

```

## Creando las tablas con ARTISAN

Para crear las tablas, mediante el cliente de laravel "ARTISAN", nos dirijimos a la consola
y en el directorio del proyecto, ejecutamos el siguiente comando.

```console
php artisan db:migrate
```


## Insertando datos por defecto con ARTISAN

Para poder tener datos por defecto en la base de datos, mediante el cliente de Laravel "ARTISAN", nos dirijimos a la consola y en el directorio del proyeccto, ejecutamos el siguiente comando.

```console
php artisan db:seed
```

