# Bold Commerce Challenge

This project be part of code challenge from Bold.

## Requirements

- PHP >= 7.1
- Composer
- MySQL

## Installation

```
git clone https://github.com/lucascavalcante/review-syncer.git
cd review-syncer/api
composer install
```
Create a database in your MySQL client like as set in src/Bold/Config/Database.php

```
$this->credentials = [
    'dbname' => 'bold-db',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql'
];
```
Now, run this commands.
```
vendor/bin/doctrine orm:schema-tool:create
```
After this, will generate your database.

Endpoints:
`/`: Just the name and version from app.

`/get-app`: get and fetch all apps in our database.

`/get-app/{appName}`: get and fetch specific app in our database.

## Author

- [Lucas Cavalcante](http://lucascavalcante.com.br)