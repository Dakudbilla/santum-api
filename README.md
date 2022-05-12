<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Laravel REST API

This is a CRUD(create,read,update and delete) API built with laravel [laravel](https://laravel.com/). It has authentication built in using laravel santum.

## Installation

First clone the repository.

Use the package manager [composer](https://getcomposer.org/) to install the project dependencies

```bash
composer install
```

Copy the `.env` file an create and application key.

```bash
cp .env.example .env && php artisan key:generate
```

The project requires you have a database installed in your local machine(SQL Database is recommended).
Setup the database in the `.env` file.

Migrate the tables.

```bash
php artisan migrate
```

## Usage

To run project in run:

```bash
php artisan serve
```

Interact with endpoints using Insomia or Postman or any API testing tool on your device.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

[MIT](https://choosealicense.com/licenses/mit/)
