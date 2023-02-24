## Quick start
- To run this project you must have installed [Composer](https://getcomposer.org/) and [Docker](https://www.docker.com/) if you are running the project with laravel sail.
- run to install dependencies
```bash
php composer install
```
- run sail to start the project
```bash
./vendor/bin/sail up
```
- This project is attending to the following requesites
    - Create a development environment withLaravel (LTS/Q1) and Mysql using Sail
    - Create a service class called Placeholder (ex: App\Services\PlaceHolderService)
    - Create a method that will consume the test api on the following endpoint: https://jsonplaceholder.typicode.com/posts
    - Create a Unit Test to validate this functionality
    - Create a model and a migration for a table called “posts” with the following fields: id, title and body
    - Create a command (ex: php artisan placeholder:posts) that, when activated, consumes the api service and records the result in the database (posts table)
    - Create a route, a controller and a view to display the data recorded in the database in the “posts” table, use the frontend technology you like the most and show what you can do in the layout.
    - Upload the application on your GitHub.

- Once the project is running you can execute commands through sail with :
```bash
./vendor/bin/sail artisan migrate
./vendor/bin/sail artisan placeholder:posts
```

- you can see the posts in: localhost:80/post or through the api localhost:80/api/post
