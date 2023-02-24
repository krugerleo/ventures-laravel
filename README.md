# Laravel Developer | Tech Test &middot; ![Laravel](https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white) ![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white)  ![Docker](https://img.shields.io/badge/docker-%230db7ed.svg?style=for-the-badge&logo=docker&logoColor=white) ![Bootstrap](https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white)

- This project is attending to the following requesites
    - Create a development environment withLaravel (LTS/Q1) and Mysql using Sail
    - Create a service class called Placeholder (ex: App\Services\PlaceHolderService)
    - Create a method that will consume the test api on the following endpoint: https://jsonplaceholder.typicode.com/posts
    - Create a Unit Test to validate this functionality
    - Create a model and a migration for a table called “posts” with the following fields: id, title and body
    - Create a command (ex: php artisan placeholder:posts) that, when activated, consumes the api service and records the result in the database (posts table)
    - Create a route, a controller and a view to display the data recorded in the database in the “posts” table, use the frontend technology you like the most and show what you can do in the layout.
    - Upload the application on your GitHub.



## Installing / Getting started

### Prerequisites
To run this project you must have installed [Composer](https://getcomposer.org/) and [Docker](https://www.docker.com/) to run the project with laravel sail.

Once in the project folder you must intall and run the containers with sail.

```shell
php composer install
cp .env.example .env
./vendor/bin/sail up

```
- after starting the containers you should be abble to acces the home page at: localhost:80

Now in a new shell you can run commands in the container through:
```shell
./vendor/bin/sail artisan migrate
./vendor/bin/sail placeholder:posts
```

### Built With
- Composer
- Laravel
- Laravel/sail
- Bootstrap
- MySQL


## Tests

To run the tests just use the following command:

The test will check if the PlaceHolderService method is working.

```shell
./vendor/bin/sail test
```

## Api Reference

There is a simple Rest API to work with Post:
- GET       localhost/api/post  
- POST      localhost/api/post  
- GET       localhost/api/post/{id}  
- PUT       localhost/api/post/{id}  
- DELETE    localhost/api/post/{id}  



## Quick start
- run to install dependencies
```bash
php composer install
```
- run sail to start the project
```bash
./vendor/bin/sail up
```

- Once the project is running you can execute commands through sail with :
```bash
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan placeholder:posts
```

- you can see the posts in: localhost:80/post or through the api localhost:80/api/post
