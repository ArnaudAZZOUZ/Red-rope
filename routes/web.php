<?php

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
    return view('welcome');
});


Route::get('/annonces', function () {
    return view('annonces');
});

Route::get('/ateliers/{id}', function ($id) {
    $ateliers=[
        0=>'peinture',
        1=>'mécanique',
        2=>'sm',
        3=>'SM avec Matthias'
    ];
    return view('ateliers',["ateliers"=>$ateliers[$id]]);
});
