<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        // contoh pemanggilan data routes dari views '/home'
    return view('home', ['nama' => 'Mohammad Fadhol mnya2']);
});

Route::get('/about', function () {
    return view('about');
});

// TUGAS Buat 2 rute baru
// 1. rute /blog yang diisi dengan judul dan kalimat isi
// 2. rute /contact yang diisi dengan email/social media

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});