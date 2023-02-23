<?php 
namespace App\Services;
use Illuminate\Support\Facades\Http;

class PlaceHolderService{
    public function retrievePosts(){
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $response = Http::get($url);
        $json_response = json_decode($response->body(), true);

        foreach($json_response as $post){
            if($post['userId']){
                unset($post['userId']);
            }
        }

        $data['data'] = $json_response;
        return $data;
    }    
}
