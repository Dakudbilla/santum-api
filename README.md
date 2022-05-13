
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
