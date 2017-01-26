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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cekk', function () {
	$data['header_banner'] = 'https://z-1-scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/s480x480/15697701_254886751590955_2747741022679344380_n.jpg?oh=de8f35c6fbfd6f1c5b662a60e8b66f2d&oe=590D6CF4';
	$data['header_image'] = '';
	$data['text_paragraph'] = '';
	$data['link to'] = '';
	$data['link_text'] = '';
    return view('emails.hello')->with($data);
});


Route::group(['prefix'=>'admin'],function()
{
	Route::group(['prefix'=>'country'],function(){
		Route::get('add',function(){
			echo "ini Pulpen";
		});
		Route::get('index',function(){
			echo "ini Permen Mint";
		});
		Route::get('edit',function(){
			echo "daripada gigit pulpen";
		});
	});
	Route::group(['prefix'=>'province'],function(){
		Route::get('add',function(){
			echo "mending";
		});
		Route::get('index',function(){
			echo "gigit";
		});
		Route::get('edit',function(){
			echo "perment mint";
		});
	});
});


Route::get('send',function()
{

	$data['header_banner'] = 'https://z-1-scontent-sin6-1.xx.fbcdn.net/v/t1.0-0/s480x480/15697701_254886751590955_2747741022679344380_n.jpg?oh=de8f35c6fbfd6f1c5b662a60e8b66f2d&oe=590D6CF4';
	$data['header_image'] = '';
	$data['text_paragraph'] = '';
	$data['link to'] = '';
	$data['link_text'] = '';

	Mail::send('emails.hello',$data,function($n)
	{
		$n->from('interpol@world.com','FBI');
		$n->to('ariefsetya@live.com')->subject('Are you okay?' .gethostname(). ' Agung hallman 04 xi rpl ');

		$n->attach(storage_path('test.jpg'));

	});

	echo "sent";
		});