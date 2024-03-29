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
use App\Mail\ContactMessageCreated;

Route::get('/',[
	'as' => "home",
	'uses' => "PagesController@home"
]);

Route::get('/about',"PagesController@about")->name("about");

Route::get('/contact',"ContactsController@create")->name("contact.create");
Route::post('/contact',"ContactsController@store")->name("contact.store");

 
 //Test email
Route::get('/test-email', function(){

	return new ContactMessageCreated("Ali","hamid@gmail.com","Je vous remercie pour koola");
});
