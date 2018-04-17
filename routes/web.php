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
	//Product Image
	Route::get('products/{id}/images', 'ProductImageController@index')->name('product.images.index');
	Route::post('products/{id}/images', 'ProductImageController@store')->name('product.images.store');
	Route::get('products/{id}/images/create', 'ProductImageController@create')->name('product.images.create');
	Route::get('products/{product_id}/images/{image_id}/edit', 'ProductImageController@edit')->name('product.images.edit');
	Route::PUT('products/{product_id}/images/{image_id}', 'ProductImageController@update')->name('product.images.update');
	Route::DELETE('products/{product_id}/images/{image_id}', 'ProductImageController@destroy')->name('product.images.destroy');
	//end product image
	
	//product package
	Route::get('products/{id}/packages', 'ProductPackageController@packages')->name('product.packages');
	Route::get('products/{id}/packages/create','ProductPackageController@create')->name('product.packages.create');
	Route::get('products/{product_id}/packages/{package_id}/edit','ProductPackageController@edit')->name('product.packages.edit');
	//end product package

	//product package image
	Route::get('products/{product_id}/packages/{package_id}/images', 'ProductPackageImageController@index')->name('product.package.images.index');

	Route::get('products/{product_id}/packages/{package_id}/images/create', 'ProductPackageImageController@create')->name('product.package.images.create');	

	Route::post('products/{product_id}/packages/{package_id}/images', 'ProductPackageImageController@store')->name('product.package.images.store');

	Route::get('products/{product_id}/packages/{package_id}/images/{image_id}/edit', 'ProductPackageImageController@edit')->name('product.package.images.edit');

	Route::PUT('products/{product_id}/packages/{package_id}/images/{image_id}', 'ProductPackageImageController@update')->name('product.package.images.update');

	Route::DELETE('products/{product_id}/packages/{package_id}/images/{image_id}', 'ProductPackageImageController@destroy')->name('product.package.images.destroy');
	//end product package image




	Route::resource('mix-package-names','MixPackageNameController');
	Route::resource('mix-packages','MixPackageController');

	Route::get('mix-packages/{id}/packages', 'MixPackageController@packages')->name('mix-packages.packages');	
	Route::get('mix-packages/{id}/create','MixPackageController@add_package')->name('mix-packages.add');	
	Route::resource('product-packages','ProductPackageController');
	
		

	Route::resource('stock','StockController');
	Route::resource('expenses','ExpenseController');
	Route::resource('trets','TretController');
	Route::resource('avatar','ImageController');

	
});


