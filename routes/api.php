<?php

use Illuminate\Http\Request;

Route::middleware(['cors', 'auth:api'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'contacts', 'middleware' => ['cors', 'auth:api']], function() {
    Route::post('create_contact', 'ContactController@create_contact');
    Route::put('edit_contact', 'ContactController@edit_contact');
    Route::delete('delete_contact/{id}', 'ContactController@delete_contact');
    Route::get('show_all_contacts', 'ContactController@search_by_all');
    Route::get('search_by_all/{data?}', 'ContactController@search_by_all');
    Route::get('search_by_id/{id}', 'ContactController@search_by_id');
});