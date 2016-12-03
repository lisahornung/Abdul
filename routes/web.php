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
/*
    Static Stuff
*/

Route::get('/', function() { return view('home'); })->name('Home');
Route::get('/Agentur', function() { return view('agentur'); })->name('Agentur');
Route::get('/Leistungen', function() { return view('leistungen'); })->name('Leistungen');
Route::get('/Pakete', function() { return view('pakete'); })->name('Pakete');
Route::get('/Kontakt', function() { return view('kontakt'); })->name('Kontakt');
Route::get('/Impressum', function() { return view('impressum'); })->name('Impressum');


/*
    Shopping System
*/
Route::get('/Vermietung', 'VermietungController@show')->name('Vermietung');
Route::post('/Vermietung', 'VermietungController@cart');
Route::get('/Vermietung/{id}', 'VermietungController@showItem')->name('shop_item');
Route::get('/Einkaufswagen', function() { return view('einkaufswagen'); })->name('Einkaufswagen');
Route::get('/Einkaufswagen/{id}', 'VermietungController@removeItem');
Route::get('/Bestellung', 'VermietungController@bestellungErfolgreich')->name('BestellungErfolgreich');
Route::post('/Bestellung', 'VermietungController@bestellung')->name('Bestellung');
Route::get('/Login', function() {return view('login'); })->name('Login');
Route::post('/Login', 'LoginController@authenticate')->name('authenticate');
Route::get('/Uebersicht', 'VermietungController@uebersicht')->name('Uebersicht');



