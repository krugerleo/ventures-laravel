@extends('base')
 
@section('title', 'Test')

@section('content')
    <div class="container">
        <h1>Laravel Developer | Tech Test</h1>
        <h3>Descrition</h3>
        <p>
            <ul>
                <li>The objective of our test is to verify the technical capacity of the candidate by doing a complete systems programming routine with the Laravel Framework.</li>
            </ul>
        </p>
        <h3>Topics that should be covered in this test</h3>
        <ul>
            <li>Create a development environment with Laravel (LTS/Q1) and Mysql using Sail</li>
            <li>Create a service class called Placeholder (ex: App\Services\PlaceHolderService)</li>
            <li>Create a method that will consume the test api on the following endpoint: https://jsonplaceholder.typicode.com/posts</li>
            <li>Create a Unit Test to validate this functionality</li>
            <li>Create a model and a migration for a table called “posts” with the following fields: id, title and body</li>
            <li>Create a command (ex: php artisan placeholder:posts) that, when activated, consumes the api service and records the result in the database (posts table)</li>
            <li>Create a route, a controller and a view to display the data recorded in the database in the “posts” table, use the frontend technology you like the most and show what you can do in the layout.</li>
            <li>Upload the application on your GitHub.</li>
        </ul>
    </div>
@stop