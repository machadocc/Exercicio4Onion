<?php

use App\Http\Controllers\CombustivelController;
use App\Http\Controllers\ImcController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/** Rota padrão laravel */
Route::get('/laravel', function () {
    return view('welcome');
});

/** Home page com os menus card */
Route::get('/', function () {
    return view('menu');
})->name('home-menu');

/** Pagina de formulário para calculo de IMC */
Route::get('/imc', function () {
    return view('saude');
})->name('calcula-imc.get');

/** Chamada do controller para a execução do calculo de IMC via servidor */
Route::post('/calcular-imc', [ImcController::class, 'calculaImc'])->name('calcula-imc.post');

/** Página de formulário para o calculo de combustivel */
Route::get('/combustivel', function(){
    return view('combustivel', [
        'combustiveis' => CombustivelController::getListaCombustivel()
    ]);
})->name('calculo-combustivel.get');

/** Chamada do controller para realizar o calculo de combustivel via servidor */
Route::post('/calcular-combustivel', [CombustivelController::class, 'calculaCombustivel'])->name('calculo-combustivel.post');

