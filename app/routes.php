<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/api/ping', function () {
	return Response::json('pong');
});

Route::get('/api/messages', function () {
	$messages = Message::orderBy('id', 'desc')->get();
	return Response::json($messages);
});

Route::post('/api/message', function () {
	$message = new Message();
	$message->name = Input::get('name');
	$message->body = Input::get('body');
	$message->save();

	return Response::json($message);
});

