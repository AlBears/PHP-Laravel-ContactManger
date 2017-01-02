<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('contacts/autocomplete', [
  'uses' => 'ContactsController@autocomplete',
  'as' => 'contacts.autocomplete'
]);

Route::resource('contacts', 'ContactsController');
