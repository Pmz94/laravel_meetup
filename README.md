# Laravel meetup

CRUD con Laravel 5.4 hecho en un meetup de [Quantum Bit](https://quantumbit.mx)

## Slides del meetup

Parte 1
http://slides.com/nachocruz/laravel-getting-started/#/

Parte 2
http://slides.com/irvisozuna/deck-1

```bash
git clone https://bitbucket.org/ignaciocruz/laravel_meetup.git laravel_meetup
cd laravel_meetup
```

## Configuracion

Instala las dependencias de composer:
```bash
/laravel_meetup$ composer install
```

o si tienes un archivo `composer.phar`:
```bash
/laravel_meetup$ php composer.phar install
```

Si no hay un archivo `.env`, copia el archivo `.env.example` y renombralo a `.env`

Puedes usar el sig comando:
```bash
# Linux
/laravel_meetup$ cp .env.example .env

# Windows
\laravel_meetup> copy .env.example .env
```

Luego corre el comando:
```bash
/laravel_meetup$ php artisan key:generate
```

En el nuevo archivo `.env` introduce las credenciales para la BD a la que hay que conectarse:
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=laravel_meetup
DB_USERNAME=root
DB_PASSWORD=
```

Crea una BD que se llame `laravel_meetup`.

Luego corre los sig comandos:
```bash
/laravel_meetup$ php artisan migrate:install
```
Si te fijas en tu BD se creo una tabla que se llama `migrations`.

Para crear las demas tablas corre:
```bash
/laravel_meetup$ php artisan migrate
```

Corre este comando:
```bash
/laravel_meetup$ php composer.phar dump.autoload
```

Para llenar esas tablas con datos dummy corre:
```bash
/laravel_meetup$ php artisan db:seed
```

Para hacer deploy al web server corre:
```bash
/laravel_meetup$ php artisan serve
```

[Quantum Bit]: https://quantumbit.mx