<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    // Consulta a la base de datos
    $posts =  [
        ['id' =>1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' =>2, 'title' => 'Laravel', 'slug' => 'laravel']
    ];
    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    // Consulta a la base de datos
    $post = $slug;
    return view('post', ['post' => $post]);
})->name('post');
