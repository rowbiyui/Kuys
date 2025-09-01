<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/kuys', function () {
    return view('kuys');
});

Route::get('/ruby', function () {
    return view('ruby');
});

Route::get('/rene', function () {
    return view('rene');
});

Route::get('/peejay', function () {
    return view('peejay');
});


use App\Models\User;

Route::get('/', function () {
    $users = User::all();
    return view('welcome', compact('users'));
});