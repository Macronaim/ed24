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
    return view('accueil');
});

Route::get('/nos-prestations/site-vitrine', function () {
    return view('pages/site-vitrine');
});

Route::get('/nos-prestations/e-commerce', function () {
    return view('pages/e-commerce');
});

Route::get('/nos-prestations/référencement-naturel', function () {
    return view('pages/referencement');
});

Route::get('/nos-realisations', function () {
    return view('pages/nos-realisations');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/mentions-legales', function () {
    return view('pages/mentions-legales');
});

Route::get('/les-cookies', function () {
    return view('pages/les-cookies');
});

Route::post('/mail', 'MailController@HandleEntry');