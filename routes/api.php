<?php

use Illuminate\Http\Request;

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
// ------------- Routes For User Controller ------------

Route::post('register', 'UserController@registerUser');
Route::post('login', 'UserController@userLogin');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//  ----------------- Auth Tokens --------------

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('create-post', 'PostController@createPost');
    Route::get('post-listing', 'PostController@postListing');  
    Route::get('post-listing/{id}', 'PostController@postListingOne');
 });
