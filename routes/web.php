<?php
	Route::get('/hello', function() {
	    echo "Hello Laravel! I am newbie!!!";
	});

	Route::get('goodbye', function() {
		echo "Bye bye the world";
	});

	Route::get('tryhard', function() {
		return "Xin chao cac ban";
	});

	//truyen tham so cho route

	Route::get('Hoten/{ten}', function($ten) {
		echo "Ten cua ban la: " . $ten;
	});

	Route::get('ngay/{date}', function($date) {
		echo "Doan Tran :" . $date;
	})->where(['date' => '[0-9]+']);

	//dinh danh cho route
	Route::get('Route1', ['as' => 'myRoute', function() {
		echo "xin chao Tran Dinh Doan";
	}]);

	Route::get('Route2', function() {
		echo "Day la route 2";
	})->name('MyRoute2');

	Route::get('Goiten', function() {
		return redirect()->route('MyRoute2');
	});

	//route group
	Route::group(['prefix' => 'MyGroup'], function() {
		//Goi user 1     domain/MyGroup/User1
		Route::get('User1', function() {
			echo "Xin chao user 1";
		});

		//Goi user 2     domain/MyGroup/User2
		Route::get('User2', function() {
			echo "Xin chao user 2";
		});

		//Goi user 3     domain/MyGroup/User3
		Route::get('User3', function() {
			echo "Xin chao user 3";
		});
	});

	//Goi Controller
	Route::get('call-controller','MyController@index');

	//truyen tham so
	Route::get('call-name/{ten}','MyController@name');

	//work with URL
	Route::get('MyRequest','MyController@GetURL');

	
	//Gui nhan du lieu voi request
	Route::get('get-Form', ['uses'=> 'handleController@getForm']);
	Route::post('handle-form', ['uses'=> 'handleController@handleRequest']);


	//Cookie
	Route::get('setCookie','MyController@setCookie');
	Route::get('getCookie','MyController@getCookie');

























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

	Route::get('/', function () {
	    return view('welcome');
	});
?>
