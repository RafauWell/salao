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
    return view('index');
});

Route::get('/produtos', 'ControladorProduto@indexView')->middleware(['auth']);
Route::get('/produto/{categoria_id}', 'ControladorProduto@produto')->middleware(['auth']);
Route::get('/categorias', 'ControladorCategoria@index')->middleware(['auth']);
Route::get('/sl', 'SlController@index')->middleware(['auth']);
Route::get('/categorias/novo', 'ControladorCategoria@create')->middleware(['auth']);
Route::get('/sl/novo', 'SlController@create')->middleware(['auth']);
Route::post('/categorias', 'ControladorCategoria@store')->middleware(['auth']);
Route::post('/sl', 'SlController@store')->middleware(['auth']);
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy')->middleware(['auth']);
Route::get('/sl/apagar/{id}', 'SlController@destroy')->middleware(['auth']);
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit')->middleware(['auth']);
Route::get('/sl/editar/{id}', 'SlController@edit')->middleware(['auth']);
Route::post('/categorias/{id}', 'ControladorCategoria@update')->middleware(['auth']);
Route::post('/sl/{id}', 'SlController@update')->middleware(['auth']);
Route::get('/test', 'ControladorProduto@index')->middleware(['auth']);

Route::get('/produtoID/{id}', 'ControladorProduto@showProd');

Route::get('/CadastroMenu', 'Controlador_Menu_Superior@index')->middleware(['auth']);
Route::get('/CadastroMenu/novo_item', 'Controlador_Menu_Superior@create')->middleware(['auth']); 
Route::post('/CadastroMenu', 'Controlador_Menu_Superior@store')->middleware(['auth']);
Route::get('/CadastroMenu/apagar_item/{id}', 'Controlador_Menu_Superior@destroy')->middleware(['auth']);
Route::get('/CadastroMenu/editar/{id}', 'Controlador_Menu_Superior@edit')->middleware(['auth']);
Route::post('/CadastroMenu/{id}', 'Controlador_Menu_Superior@update')->middleware(['auth']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/shop', function () {
    return view('shop');
});




Route::get('/teste_ryan', function () {
    return view('teste_ryan');
});


Route::view('/upload', "upload")->middleware(['auth']);
Route::view('/cart', "cart");

Route::view('/novoProduto', "novoProduto")->middleware(['auth']);
Route::post('/store', "UserController@store")->middleware(['auth']);
Route::post('/ficha', "FichaTecnicaController@store")->middleware(['auth']);
Route::get('/editarproduto/{id}', "UserController@edit")->middleware(['auth']);
Route::get('/inrementProduto/{id}', "UserController@increment")->middleware(['auth']);
Route::get('/inserirImagem/{id}', "ImagemController@index")->middleware(['auth']);

Route::get('/imagem/novo/{id}', "ImagemController@create")->middleware(['auth']);

Route::post('/udateoproduto/{id}', 'UserController@update')->middleware(['auth']);
Route::post('/produto', "ControladorProduto@store")->middleware(['auth']);
Route::post('/image', "ImagemController@store")->middleware(['auth']);
Route::get('/imagem/apagar/{id}',"ImagemController@destroy")->middleware(['auth']);


Route::get('/arquivos', 'PostControlador@index')->middleware(['auth']);
Route::post('/arquivos', 'PostControlador@store')->middleware(['auth']);
Route::delete('/arquivos/{id}', 'PostControlador@destroy')->middleware(['auth']);
Route::get('/arquivos/{id}', 'PostControlador@download')->middleware(['auth']);


