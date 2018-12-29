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

//grupo de rotas
Route::group(['prefix'=>'teste'],function(){
    Route::get('/teste1', function () {
        return "aa";
    });
    Route::get('/teste2', function () {
        return "bb";
    });

});

//rota com parametro opcional
Route::get('/categoria/{id?}/{nome?}', function ($id=null,$nome=null) {
    return "id = {$id}, nome = {$nome}";
});

//pega qualquer tipo de requisição
Route::any('/any', function () {
    return "ROTA ANY";
});

//independente de onde vem o /match, fica flexivel
Route::match(['get','post'],'/match', function () {
    return "ROTA MATCH";
});

//quando é post
Route::post('/empresa', function () {
    return "ROTA POST";
});

//nomeando a rota. deste modo, quando houver alteração no caminho. não será necessário mudar em outra parte do código
Route::get('/nome/nome1/nome2', function () {
    return view("welcome");
})->name('rota.nomeada');

// Route::get('/', function () {
//     return "aa";
// });


//pegando rota nomeada
Route::get('/', function () {
    return redirect()->route('rota.nomeada');
});

?>