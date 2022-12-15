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

Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()
|
*/

Route::get('/', function () {
    $jumbo = 'https://www.milanotoday.it/~media/horizontal-hi/4901663177167/realta-e-illusione-nei-film-analisi-di-the-truman-show.jpg';
    return view('home', compact('jumbo'));
});
Route::get('about-me', function () {
    $data = [
        'user' => 'Alessio',
        'age' => 21,
        'email' => 'dolcealessio1@gmail.com',
        'gender' => 'male'
    ];
    return view('about', $data);
})->name('about');
Route::get('contact', function () {
    $contacts = [
        'senior' => 'apu',
        'senNumbers' => [
            '3284743217',
            '0833482834',
            '3289392183',
        ],
        'junior' => 'alessio',
        'junNumbers' => [
            '3806478998',
            '3276452363'
        ]
    ];
    return view('contact', $contacts);
})->name('contact');
