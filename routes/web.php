<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend site................

Route::get('/', 'HomeController@index');

//show category wise product here
Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture');
Route::get('/view_product/{product_id}','HomeController@product_details_by_id');
//cart routes are here----------------
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart','CartController@update_cart');


 //checkout routes are here======

Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer_registration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');

//customer login and logout are here------------------------------------
Route::post('/customer_login','CheckoutController@customer_login');
Route::get('/customer_logout','CheckoutController@customer_logout');


Route::get('/payment','CheckoutController@payment');//payment
Route::post('/order-place','CheckoutController@order_place');



//Backend routes.........

Route::get('/admin','AdminController@index');

Route::get('/dashboard','SuperAdminController@index');

Route::post('/admin-dashboard','AdminController@dashboard');

Route::get('/logout','SuperAdminController@logout');




   
//catagory related route

Route::get('/add-category','CatagoryController@index');
Route::get('/all-category','CatagoryController@all_category');
Route::post('/save-category','CatagoryController@save_category');
Route::get('/unactive_category/{category_id}','CatagoryController@unactive_category');
Route::get('/active_category/{category_id}','CatagoryController@active_category');
Route::get('/edit-category/{category_id}','CatagoryController@edit_category');
Route::post('/update-category/{category_id}','CatagoryController@update_category');
Route::get('/delete-category/{category_id}','CatagoryController@delete_category');

//manufacture or brands routes are here
Route::get('/add-manufacture','ManufactureController@index');
Route::post('/save-manufacture','ManufactureController@save_manufacture');
Route::get('/all-manufacture','ManufactureController@all_manufacture');
Route::get('/delete-manufacture/{manufacture_id}','ManufactureController@delete_manufacture');
Route::get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');  
Route::get('/edit-manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}','ManufactureController@update_manufacture');

//products routes are here

Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/unactive_product/{product_id}','ProductController@unactive_product');
Route::get('/active_product/{product_id}','ProductController@active_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');

//slider routes are here

Route::get('/add-slider','SliderController@index');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/all-slider','SliderController@all_slider');
Route::get('/unactive_slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active_slider/{slider_id}','SliderController@active_slider');
Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');


//admin order show
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order');
Route::get('/active_paid/{order_id}','CheckoutController@active_paid');
Route::get('/delete_paid/{order_id}','CheckoutController@delete_paid');

