<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class clientController extends Controller
{
    public function getAllPost(){
         $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json(); 
    }
    public  function getPostById($id){
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $posts->json();
    }
    public function addPost(){
        $post = http::post('https://jsonplaceholder.typicode.com/posts',[
            'userId'=> 1,
            'title'=>'New title',
            'body'=>'New description par Mahdi'
        ]);
        return $post->json();
    }
    public function updatePost(){
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'update title',
            'body' => 'Update description'
        ]);
        return $response->json();
    }
    public function deletePost($id){
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $response->json();
    }
}
