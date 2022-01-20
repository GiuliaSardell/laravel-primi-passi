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
        'articles' => [
            'lorem ipsum',
            ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, perspiciatis!',
            'quibusdam perspiciatis laboriosam sunt blanditiis necessitatibus adipisci aspernatur ipsum.',
            ' Sint deleniti molestiae repellendus quam est excepturi voluptatibus reprehenderit corporis aut veniam atque nemo nesciunt, facilis quae expedita' 
        ]
        
    ];


    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/opportunity', function () {
    return view('opportunity');
})->name('opportunity');
