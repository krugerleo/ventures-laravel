<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\PlaceHolderService;

class PlaceHolderServiceTest extends TestCase
{
    public function testPlaceHolderRetrieveReturnsDataInValidFormat(){
        $response = (new PlaceHolderService())->retrievePosts();
        # Since in returning the json verify if first element in data has the 'body' key
        $this->assertArrayHasKey('body', $response['data'][0]);
    }

    public function testFetchReturnsDataInValidFormat(){
        # If i were returning the response from get we could test for HTTP Status and json format through
        # $this->json('get', url)
        # ->assertStatus(Response::HTTP_OK)
        # ->assertJsonStructure('DATA' => [ '*' => [ 'title, 'body', 'id'] ])
        $this->json('get','api/fetch')
        ->assertStatus(200)
        ->assertJsonStructure(['data' => ['*' => ['title', 'body', 'id']]]);
    }
}
