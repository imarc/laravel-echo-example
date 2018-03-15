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

use App\Events\TestEvent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/broadcast-test', function() {
   event(new TestEvent('The server time is now ' . date('H:i:s')));
});
