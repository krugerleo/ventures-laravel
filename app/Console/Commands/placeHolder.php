<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\PlaceHolderService;
use App\Models\Posts;

class placeHolder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'placeholder:posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieve 100 Lorem Ipsum posts from https://jsonplaceholder.typicode.com/posts and save them in the database';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $posts = (new PlaceHolderService())->retrievePosts();
        Posts::insert($posts['data']);
    }
}
