<?php

/*
|--------------------------------------------------------------------------
| Get application instance
|--------------------------------------------------------------------------
|
| Here we will get the application instance that serves as
| the central piece of this framework.
|
*/

$f3 = \Base::instance();



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Fat-Free the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$f3->route('GET /','Controllers\Home->index'); // Home
