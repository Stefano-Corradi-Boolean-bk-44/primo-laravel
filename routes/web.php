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

    $data = [
        'name' => 'Ugo',
        'films' => [
            "Ritorno al futuro",
            "Colazione da Tiffany",
            "Titanic",
            "Via col vento"
        ],
        'stampa' => false
    ];
    return view('home', $data);
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/contatti', function () {
    return view('contacts');
})->name('contacts');

