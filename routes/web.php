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
        'footerNav' => $footerNav,
        'socialIcons' => ["facebook.png", "periscope.png", "pinterest.png", "twitter.png", "youtube.png"]
    ];

    return view('comics', $data);
});

Route::get('/', function () {
    $footerNav = config('footerNav');

    $data = [
        'nav' => ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"],
        'socialIcons' => ["facebook.png", "periscope.png", "pinterest.png", "twitter.png", "youtube.png"],
        'footerNav' => $footerNav
    ];

    return view('landing', $data);
});
