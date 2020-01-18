<?php

Route::get('/', function(){
	
	return redirect()->route('login.index');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify')->name('login.verify');

Route::get('/logout', 'LogoutController@index')->name('logout.index');

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/user/show/{id}', 'UserController@show')->name('user.show');

Route::get('/supplier', 'SupplierController@index')->name('supplier.index');

Route::get('/supplier/create/', 'SupplierController@create')->name('supplier.create');
Route::post('/supplier/create/', 'SupplierController@store');
Route::get('/supplier/edit/{id}', 'SupplierController@edit')->name('supplier.edit');
Route::post('/supplier/edit/{id}', 'SupplierController@update');
Route::get('/supplier/delete/{id}', 'SupplierController@delete')->name('supplier.delete');
Route::post('/supplier/delete/{id}', 'SupplierController@destroy');
Route::get('/supplier/show/{id}', 'SupplierController@show')->name('supplier.show');
/*Route::get('/accounts', 'AccountController@index')->name('account.index');
Route::get('/accounts/show/{id}', 'AccountController@show')->name('account.show');*/

/*Route::get('/accounts/create/', 'AccountController@create')->name('account.create');
Route::post('/accounts/create/', 'AccountController@store');
Route::get('/accounts/edit/{id}', 'AccountController@edit')->name('account.edit');
Route::post('/accounts/edit/{id}', 'AccountController@update');
Route::get('/accounts/delete/{id}', 'AccountController@delete')->name('account.delete');
Route::post('/accounts/delete/{id}', 'AccountController@destroy');*/


//Route::resource('/acctypes', 'AccountTypeController');