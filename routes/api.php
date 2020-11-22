<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/test-the-api',function()
// {
// return ['message' => 'Hello!'];
// });

//posts-CRUD-(http request)
// get all(GET)/api/posts
//create a single(POST)/api/posts
// get a single row(GET)/api/posts/{id}
// update a single(PUT/PATCH)/api/posts/{id}
// delete (DELETE)/api/posts/{id}

//To create a resource in Laravel
// 1.Create the database and migrations
// 2. create a model
// 3.create a service : Eloquent ORM
// 4.create a controller to go,get info from the database.
// 5.Return that info

// Route::get('/posts',function(){

//     $post = Post::create([
//         'title' => 'my first post',
//         'slug' => 'my first slug'
//     ]);
//     return $post;
// });

// //show all mode
Route::get('/posts',[PostController::class, 'index']);


// //show single mode
Route::get('/posts/{id}',[PostController::class, 'show']);

//store/create mode
Route::post('/posts',[PostController::class, 'store']);

//update mode
Route::put('/posts/{id}',[PostController::class, 'update']);

//delete mode
Route::delete('/posts/{id}',[PostController::class, 'destroy']);


// Route::resource('posts',[PostController::class]);