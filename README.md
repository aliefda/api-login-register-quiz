# Laravel API - Module-04 CRUD

Laravel API Project - Create, Read, Update and Delete (CRUD)

## Requirements

- Composer
- PHP >= 7.1.3
- MySQL or MariaDB

## Tutorials

- [Restfull API CRUD with Passport](https://itsolutionstuff.com/post/build-restful-api-in-laravel-58-exampleexample.html) CRUD, be careful tutorial using authentication with a **passport**, while the project uses **jwt** authentication
- [Laravel Migration](https://laravel.com/docs/5.8/migrations#columns) Column Types

## Challenge
- Clone this repositories
- Install depedencies
```text
$ composer install
```
- Create .env file
```text
$ cp .env-example .env
```
- Genereate key (laravel and jwt)
```text
$ php artisan key:generate
$ php artisan jwt:secret
```
- Modify .env file, configure the database connection string
- Create a migration and a model file for the material table 
- Migrate database
- Implement UuidTrait, modify model file that have been made
```php
<?php
...
use App\Traits\UuidTrait;
...
class ...
{
    use UuidTrait;
    ...
}
```
- Create a new controller and add the crud command
- Create endpoints for controllers that have been made 
- Use the postman to check the API that has been made
- Push project to this repositories
- Take a screenshot of your repositories link and post to the [KK4-B Google Classroom](https://classroom.google.com)

## Example Laravel Migration Table Schema

- Material Table

| Column Name   | Column Type  |
| ------------- | ------------ |
| uuid          | uuid         |
| thumbnail     | string(100)  |
| title         | string(200)  |
| content       | text         |
