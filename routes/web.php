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

Route::get('/comics', function () {
    $comics = config('comics');
    $icons = config('icons');
    $footerNav = config('footerNav');

    $data = [
        'comics' => $comics,
        'nav' => ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"],
        'icons' => $icons,
        'footerNav' => $footerNav
    ];

    return view('comics', $data);
});
