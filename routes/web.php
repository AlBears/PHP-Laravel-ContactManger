<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('groups/store', [
  'uses' => 'GroupsController@store',
  'as' => 'groups.store'
]);


Route::get('contacts/autocomplete', [
  'uses' => 'ContactsController@autocomplete',
  'as' => 'contacts.autocomplete'
]);

Route::resource('contacts', 'ContactsController');
