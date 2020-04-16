# Noufal's Test

Laravel application to get list of internet subscription products

## Installation

Clone the repository

```bash
https://github.com/noufal369/laravel-test.git
```


Switch to the repo folder

```bash
cd laravel-test
```


Install all the dependencies using composer

```bash
composer install
```


Copy the example env file and make the required configuration changes in the .env file

```bash
cp .env.example .env
```


Generate a new application key

```bash
php artisan key:generate
```

Run the database migrations (Set the database connection in .env before migrating)

```bash
php artisan migrate
```

Seed the database

```bash
php artisan db:seed --class=ProductSeeder
```
Start the local development server

```bash
php artisan serve
```
You can now access the server at http://localhost:8000


## Usage
Hit the url from browser
```bash
http://localhost:8000/products
```

