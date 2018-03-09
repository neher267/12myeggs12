<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'PublicController@index');
Route::get('contact-us', 'PublicController@contact_us');
Route::get('about-us', 'PublicController@about_us');
Route::get('/{category}/products','PublicController@products');
Route::get('details','PublicController@details');

Route::post('logout', 'Auth\SentinelLoginController@logout')->middleware('sentinel.auth');


Route::group(['namespace'=>'Auth', 'middleware'=>['guest']], function(){
	Route::resource('register','SentinelRegisterController');
	Route::post('login','SentinelLoginController@post_login');
	Route::get('login','SentinelLoginController@login');
});

Route::group(['middleware'=>['sentinel.auth', 'buyer']], function(){
	Route::resource('purchases','PurchaseController');
});

Route::group(['middleware'=>['sentinel.auth', 'customer']], function(){
	Route::resource('checkout','CheckoutController');
});

Route::group(['namespace'=>'Auth', 'middleware'=>['sentinel.auth']], function(){
	Route::get('dashboard','DashboardController@index');
	Route::get('profile','ProfileController@index');	
});

Route::group(['middleware'=>['sentinel.auth']], function(){
	Route::resource('products','ProductController');
	Route::resource('packages','PackageController');
	Route::resource('mix-packages','MixPackageController');	
	Route::resource('trets','TretController');
	Route::resource('users','UserController');
});

Route::group(['namespace'=>'Settings', 'middleware'=>['sentinel.auth']], function(){
	Route::resource('areas','AreaController');
	Route::resource('branches','BranchController');
	Route::resource('categories','CategoryController');
	Route::resource('departments','DepartmentController');
	Route::resource('districts','DistrictController');
	Route::resource('gifts','GiftController');
	Route::resource('roles','RoleController');
});



Route::group(['namespace'=>'Hr', 'middleware'=>['sentinel.auth']], function(){
	Route::resource('products','ProductController');
	Route::get('products/{id}/packages', 'ProductController@packages')->name('products.packages');
	Route::resource('mix-package-names','MixPackageNameController');
	Route::resource('mix-packages','MixPackageController');
	Route::get('mix-packages/{id}/packages', 'MixPackageController@packages')->name('mix-packages.packages');	
	Route::get('mix-packages/{id}/create','MixPackageController@add_package')->name('mix-packages.add');	
	Route::resource('product-packages','ProductPackageController');
	Route::get('product-packages/{id}/create','ProductPackageController@add_package')->name('product-packages.add');	
	Route::resource('stock','StockController');
	Route::resource('expenses','ExpenseController');
	Route::resource('trets','TretController');

	
});


