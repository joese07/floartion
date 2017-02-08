<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Model Bindings */
Route::model('post','App\Post');
Route::model('comment','App\Comment');

/* Route Untuk User */
Route::get('/','BlogController@index');
Route::get('/post/{post}/show',['as' => 'post.show','uses' => 'BlogController@showPost']);
Route::post('/post/{post}/comment',['as' => 'post.newcom','uses' =>'BlogController@newComment']);
View::composer('blog.sidebar', function ($view) {
$view->recentPosts = App\Post::orderBy('id', 'desc')->take(6)->get();
$view->recentComments = App\Comment::orderBy('id', 'desc')->take(5)->get();
});

/* Route Untuk Otorisasi */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/* Route Untuk Administrator */
Route::group( [
    'middleware' => 'auth' ,
        ] , function() {
   
   get('/dashboard', function()
	{
		return view('blog.admin.home');
	}); 

	resource('dashboard/post', 'AdminPostController');
	resource('dashboard/comment', 'AdminCommentController');
	resource('dashboard/message','AdminMessageController');
	resource('dashboard/adgallery','AdminGalerryController');
	resource('dashboard/adgalleryb','AdminGalleryTController');



} );


Route::resource('daftar/register','DaftarController');
Route::get('/contact','ContactController@index');
Route::post('/contact','ContactController@save');
Route::get('/gallery','GalleryController@index');
Route::get('/balas/{id}','AdminMessageController@getbalas');
Route::post('/balas','AdminMessageController@postbalas');	
Route::get('/delete/{id}','AdminMessageController@destroy');
Route::get('/cari','CariController@index');
Route::post('/contactus','ContactusController@save');
Route::get('/contactus','ContactusController@index');
Route::get('/deletee/{id}','AdminGalerryController@destroy');



