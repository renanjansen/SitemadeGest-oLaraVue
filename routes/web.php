<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FornecedoresController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\TesteController;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/',[PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/sobre-nos',[SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');

Route::get('/contato',[ContatoController::class, 'contato'])->name('site.contato');

Route::get('/rota1',[PrincipalController::class, 'rota1'])->name('site.rota1');

Route::get('/teste/{p1}/{p2}',[TesteController::class, 'teste'])->name('teste');

Route::fallback(function(){
    echo 'A rota acessada não existe. <a href="'.route('site.principal').'">Clique aqui</a> para ir para página inicial';
});


//Route::get('/login',[])->name(site.login);

Route::prefix('/app')->group(function(){
    Route::get('/clientes',[ClientesController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores',[FornecedoresController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/produtos',[ProdutosController::class, 'produtos'])->name('app.produtos');
});



