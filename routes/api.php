<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

Route::get('/posts', [RestApiController::class, 'getPosts']);
Route::get('/posts/{id}', [RestApiController::class, 'getPostById']);
Route::post('/posts', [RestApiController::class, 'createPost']);
Route::put('/posts/{id}', [RestApiController::class, 'updatePost']);
Route::delete('/posts/{id}', [RestApiController::class, 'deletePost']);
