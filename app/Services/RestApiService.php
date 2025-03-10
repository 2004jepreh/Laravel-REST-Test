<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class RestApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = "https://jsonplaceholder.typicode.com"; // Replace with your API URL
    }

    public function getPosts()
    {
        $response = Http::get("$this->baseUrl/posts");

        return $response->json(); // Convert response to JSON
    }

    public function getPostById($id)
    {
        $response = Http::get("$this->baseUrl/posts/$id");

        return $response->json();
    }

    public function createPost($data)
    {
        $response = Http::post("$this->baseUrl/posts", $data);

        return $response->json();
    }

    public function updatePost($id, $data)
    {
        $response = Http::put("$this->baseUrl/posts/$id", $data);

        return $response->json();
    }

    public function deletePost($id)
    {
        $response = Http::delete("$this->baseUrl/posts/$id");

        return $response->json();
    }
}
