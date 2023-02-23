<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Services\PlaceHolderService;

class PostApiController extends Controller
{
    public function fetch()
    {
        $response = (new PlaceHolderService())->retrievePosts();
        return response()->json($response, 200);
    }

    public function index()
    {
        return Posts::all();
    }

    public function show(Posts $post)
    {
        return $post;
    }

    public function store(Request $request)
    {
        $post = Posts::create($request->all());

        return response()->json($post, 201);
    }

    public function update(Request $request, Posts $post)
    {
        $post->update($request->all());

        return response()->json($post, 200);
    }

    public function delete(Posts $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }
}