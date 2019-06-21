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

//Route::localizedGroup(function () {
	Route::get('/', function () {
	    return view('main', [
	        'contacts' => \App\Contacts::find(1),
            'clients' => \App\Clients::find(1),
            'galleries' => \App\Galleries::find(1),
            'portfolios' => \App\Portfolios::orderBy('numb', 'asc')->get(),
            'controller' => new \App\Http\Controllers\HomeController()
        ]);
	});

    Route::get('/jbi', function () {
        return view('jbi', [
            'contacts' => \App\Contacts::find(1),
            'galleries' => \App\Galleries::find(2),
            'catalog' => \App\Jbicatalogs::orderBy('numb', 'asc')->get(),
            'controller' => new \App\Http\Controllers\JbiController()
        ]);
    });

    Route::match(['get', 'post'], 'jbi/{id}', 'JbiController@showDetails')->where(['id' => '[0-9]+']);

    Route::get('/avtopark', function () {
        return view('avtopark', [
            'contacts' => \App\Contacts::find(1),
            'galleries' => \App\Galleries::find(4),
            'controller' => new \App\Http\Controllers\AvtoparkController()
        ]);
    });

    Route::get('/steel', function () {
        return view('steel', [
            'contacts' => \App\Contacts::find(1),
            'galleries' => \App\Galleries::find(3),
            'catalog' => \App\Steelcatalogs::orderBy('numb', 'asc')->get(),
            'controller' => new \App\Http\Controllers\SteelController()
        ]);
    });

    Route::match(['get', 'post'], 'steel/{id}', 'SteelController@showDetails')->where(['id' => '[0-9]+']);
//});

Auth::routes();

Route::get('/home', function () {
    return redirect('/admin');
});
