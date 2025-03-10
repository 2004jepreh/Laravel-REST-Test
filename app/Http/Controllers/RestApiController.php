<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RestApiService;

class RestApiController extends Controller
{
    protected $apiService;

    public function __construct(RestApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function getPosts()
    {
        return response()->json($this->apiService->getPosts());
    }

    public function getPostById($id)
    {
        return response()->json($this->apiService->getPostById($id));
    }

    public function createPost(Request $request)
    {
        $data = $request->only(['title', 'body', 'userId']);
        return response()->json($this->apiService->createPost($data));
    }

    public function updatePost(Request $request, $id)
    {
        $data = $request->only(['title', 'body', 'userId']);
        return response()->json($this->apiService->updatePost($id, $data));
    }

    public function deletePost($id)
    {
        return response()->json($this->apiService->deletePost($id));
    }
}
