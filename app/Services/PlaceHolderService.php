<?php 
namespace App\Services;
use Illuminate\Support\Facades\Http;

class PlaceHolderService{
    public function retrievePosts(){
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $response = Http::get($url);
        $json_response = json_decode($response->body(), true);

        foreach($json_response as $key => $post){
            if($post['userId']){
                unset($json_response[$key]['userId']);
            }
        }

        $data['data'] = $json_response;
        return $data;
    }    
}
