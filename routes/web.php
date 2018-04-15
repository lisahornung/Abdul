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
Route::post('/Kontakt', 'VermietungController@kontakt')->name('KontaktPOST');
Route::get('/Impressum', function() { return view('impressum'); })->name('Impressum');
Route::get('/Salsaevent', function() { return view('salsaevent'); })->name('Salsaevent');


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


/*
 * OLD PAGE REDIRECTS
 */
Route::get('/DJ-Abdul', function(){ return Redirect::to('http://djabdul.de/', 301);});
Route::get('/DJ-Abdul/events', function(){ return Redirect::to('http://djabdul.de/', 301);});
Route::get('/DJ-Abdul/events/firmenevents', function(){ return Redirect::to('http://djabdul.de/', 301);});
Route::get('/DJ-Abdul/events/hochzeiten', function(){ return Redirect::to('http://djabdul.de/', 301);});
Route::get('/DJ-Abdul/events/salsa-events', function(){ return Redirect::to('http://djabdul.de/Salsaevent', 301);});
Route::get('/DJ-Abdul/vermietung', function(){ return Redirect::to('http://djabdul.de/Vermietung', 301);});
Route::get('/DJ-Abdul/vermietung/anlagentechnik', function(){ return Redirect::to('http://djabdul.de/Vermietung', 301);});
Route::get('/DJ-Abdul/vermietung/dj-technik', function(){ return Redirect::to('http://djabdul.de/Vermietung', 301);});
Route::get('/DJ-Abdul/vermietung/lichttechnik', function(){ return Redirect::to('http://djabdul.de/Vermietung', 301);});
Route::get('/DJ-Abdul/galerie', function(){ return Redirect::to('http://djabdul.de/Agentur', 301);});
Route::get('/DJ-Abdul/referenzen', function(){ return Redirect::to('http://djabdul.de/Agentur', 301);});
Route::get('/DJ-Abdul/anfrage', function(){ return Redirect::to('http://djabdul.de/Kontakt', 301);});






