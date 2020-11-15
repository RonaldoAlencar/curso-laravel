<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\GroupUse;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */


Route::resource('products', 'ProductController');//->middleware('auth');

/*
Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::post('products', 'ProductController@store')->name('products.store');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
*/










// Route::get('/empresa', function (){
//     return 'Empresa';
// });

// Route::get('/contato', function (){
//     return view('contact');
// });


// // rota retonarndo view

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/view', 'welcome', ['id' => 'teste']); //quando view simples



// Route::get('/register', function () {
//     return 'registre';
// });


// Route::any('/any', function () {
//     return 'Any';
// });


// Route::match(['get', 'post'], '/match', function () {
//     return 'match';
// });


// //pegar valor da url
// Route::get('/categorias/{flag}', function ($flag) {
//     return "Produtos da categoria: {$flag}";
// });

// //para prefixo depois
// Route::get('/categoria/{flag}/posts', function ($flag) {
//     return "Posts da categoria: {$flag}";
// });

// //definir parametro na url opcional
// Route::get('/produtos/{idproduct?}', function($idproduct = ''){
//     return "Produtos(s) {$idproduct}";
// });

// //redirecionamento de rotas

// // Route::get('redirect1', function (){
// //     return redirect ('/redirect2');
// // });
// Route::redirect('/redirect1', '/redirect2');

// Route::get('redirect2', function (){
//     return 'Redirect 02';
// });

// Route::get('/nome-url', function(){
//     return 'Hey hey hey';
// })->name('url.name');

// Route::get('/redirect3', function(){
//     return redirect()->route('url.name');
// });


// //grupo de rotas com autenticação de login
// Route::middleware([])->group(function(){

//     Route::prefix('admin')->group(function () {

//         Route::namespace('Admin')->group(function(){

//             Route::get('/dashboard', 'TesteController@teste')->name('admin.dashboard');
//             Route::get('/financeiro', 'TesteController@teste')->name('admin.financeiro');        
//             Route::get('/produtos', 'TesteController@teste')->name('admin.products');
//             Route::get('/', 'TesteController@teste')->name('admin.home');  
//         });   
//     });
// });


// Route::get('/login', function(){
//     return 'Login'; //encaminhado do middleware
// })->name('login');
