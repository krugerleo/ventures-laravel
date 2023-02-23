<?php 
namespace App\Services;
use Illuminate\Support\Facades\Http;

class PlaceHolderService{
    public function retrievePosts(){
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $response = Http::get($url);
        $json_response = json_decode($response, false);

        foreach($json_response as $post){
            if($post->userId){
                unset($post->userId);
            }
        }
        
        return $json_response;
    }    
}
