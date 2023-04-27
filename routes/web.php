<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;


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
Route::get('/', function(){
    return view('index');
});

/* Route::get('/p', function(){
    return redirect()->route('prod.index');
});

Route::get('/p', function(){
    return redirect()->route('prod.index');
});
*/
Route::resource('/usuarios', UserController::class);
Route::resource('/cat', CategoriaController::class);
Route::resource('/prod', ProdutoController::class);

Route::get('/cat/{id}/produto', [CategoriaController::class, 'produto'])->name('cat.produto');



/* trabalho passado
Route::get('/home', function(){
    return view('home');
});

Route::get('/p1', function(){
    return view('ryu');
});

Route::get('/p2', function(){
    return view('ken');
}); 

Route::get('/p3', function(){
    return view('akuma');
}); 

Route::get('/p4', function(){
    return view('blanka');
}); 

Route::get('/p5', function(){
    return view('sagat');
}); 

Route::get('/p6', function(){
    return view('honda');
}); 

*/