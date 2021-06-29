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
    $bannier = "101";
    return view('pages/site-vitrine', compact('bannier'));
});

Route::get('/nos-prestations/e-commerce', function () {
    $bannier = "102";
    return view('pages/e-commerce', compact('bannier'));
});

Route::get('/nos-prestations/referencement-naturel', function () {
    $bannier = "103";
    return view('pages/referencement', compact('bannier'));
});

Route::get('/nos-realisations', function () {
    $bannier = "104";
    return view('pages/nos-realisations', compact('bannier'));
});

Route::get('/contact', function () {
    $bannier = "105";
    return view('pages/contact', compact('bannier'));
});

Route::get('/mentions-legales', function () {
    $bannier = "106";
    return view('pages/mentions-legales', compact('bannier'));
});

Route::get('/les-cookies', function () {
    $bannier = "106";
    return view('pages/les-cookies', compact('bannier'));
});

Route::post('/documents-interns','App\http\Controllers\SecretPageController@Index')->name('protected-page');
Route::get('/documents-interns','App\http\Controllers\SecretPageController@Index')->name('documents-interns');
Route::post('/documents-interns/login','App\http\Controllers\SecretPageController@login')->name('documents-login');

Route::post('mail', 'App\Http\Controllers\MailController@HandleEntry');