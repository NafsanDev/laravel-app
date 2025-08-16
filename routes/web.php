<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function (){
    return view('hello');
});*/
Route::view('/', 'home');
Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function(){
        Route::get('/', 'index')
            ->name('index');
        Route::get('/create', 'create')
            ->name('create');
        Route::post('/store', 'store')
            ->name('store');
        Route::get('/{product}', 'show')
            ->name('show');
        Route::get('/{product}/edit', 'edit')
            ->name('edit');
        Route::patch('/{product}', 'update')
            ->name('update');
        Route::delete('/{product}', 'destroy')
            ->name('destroy');
});

Route::get('/teas', function(){
    $teas = [
        ['name' => 'Condensed Milk Tea', 'price'=> 10, 'id'=> 1],
        ['name' => 'Color Tea', 'price'=> 5, 'id'=> 2],
        ['name' => 'Cow Milk Tea', 'price'=> 15, 'id'=> 3]
    ];

    return view('teas.index', ['teas' => $teas]);
});