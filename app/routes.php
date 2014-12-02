<?php
Route::get('/', 'ClientController@create');

//resource() mapeia as urls de funções RESTful
Route::resource('users', 'UsersController');
Route::resource('workers', 'WorkerController');
Route::resource('products', 'ProductController');
Route::resource('suppliers', 'SupplierController');
Route::resource('clients', 'ClientController');

Route::get('/books', function () {
	//return User::find(1)->books;
	return Book::find(1)->users;
});

//controle de sessoes
Route::get('/login', [
	'as' => 'login',
	'uses' => 'SessionsController@create',
]);

Route::get('/logout', [
	'as' => 'logout',
	'uses' => 'SessionsController@destroy',
]);

Route::resource('sessions', 'SessionsController', [
	'only' => ['create',
		'store',
		'destroy'],
]);
