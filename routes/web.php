<?php

use Illuminate\Support\Facades\Route;

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
    return [
        'Laravel' => app()->version(),
        'session.domain' => config('session.domain'),
        'cors.allowed_origins' => config('cors.allowed_origins'),
        'app.url' => config('app.url'),
        'app.frontend_url' => config('app.frontend_url'),
    ];
});

require __DIR__.'/auth.php';
