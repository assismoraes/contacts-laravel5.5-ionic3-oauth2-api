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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create_contact', 'ContactController@create_contact');
Route::put('edit_contact', 'ContactController@edit_contact');
Route::delete('delete_contact/{id}', 'ContactController@delete_contact');
Route::get('show_all_contacts', 'ContactController@search_by_email');
Route::get('search_by_email/{email?}', 'ContactController@search_by_email');