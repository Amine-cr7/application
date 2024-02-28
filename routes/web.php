<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\formController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\moduleController;
use App\Http\Controllers\MyTacheController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\playerController;
use App\Http\Controllers\produitController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\tacheController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('calc');
// });
// Route::get('/{n}/{m}','App\Http\Controllers\CalculeController@calcule');
// Route::get('/tasks','App\Http\Controllers\TaskController@index');
// Route::get('/livre/{id}','App\Http\Controllers\LivreController@show');
// Route::get('/accueil',function (){
//     return view('accueil');
// })->middleware('age');
// Route::get('/nom',function (){
//     return view('contact');
// })->middleware('user');
// Route::get('/accueil',function (){
//     return view('test');
// });

// Route::view('/', 'form');
// Route::Post('/','App\Http\Controllers\formController@getdata');
// Route::get('/produit',[produitController::class,'index']);
// Route::get('/produit/{id}',[produitController::class,'show']);
// Route::view('/create','crud.create');
// Route::post('/store',[produitController::class,'store']);
// Route::get('/produit/{id}/edit',[produitController::class,'edit']);
// Route::post('/update/{id}',[produitController::class,'update']);
// Route::get('/delete/{id}',[produitController::class,'delete']);
// Route::view('/login','gestion.login');
// Route::post('/login',[loginController::class,'login']);
// Route::get('/module',[moduleController::class,'index']);
// Route::post('/module/cherche',[moduleController::class,'cherche']);
// Route::view('/module/create','gestion.create');
// Route::post('/module/store',[moduleController::class,'store']);
// Route::get('/module/{id}/edit',[moduleController::class,'edit']);
// Route::post('/module/update/{id}',[moduleController::class,'update']);
// Route::get('/module/delete/{id}',[moduleController::class,'delete']);
// Route::post('/module',[moduleController::class,'cherche']);

//agence 
// Route::get('/admin/ajouter',[AdminController::class,'ajouter']);
// Route::post('/admin/store',[AdminController::class,'store']);
// Route::get('/admin',[AdminController::class,'index']);
// Route::get('/admin/edit/{id}',[AdminController::class,'edit']);
// Route::get('/admin/delete/{id}',[AdminController::class,'delete']);
// Route::post('/admin/update/{id}',[AdminController::class,'update'])->name('modifier');
// Route::get('/option',[OptionController::class,'index']);
// Route::view('/option/create','agence.createOption');
// Route::post('/option/store',[OptionController::class,'store']);
// Route::get('/option/edit/{option}',[OptionController::class,'edit']);
// Route::post('/option/update/{option}',[OptionController::class,'update']);
// Route::get('/option/delete/{option}',[OptionController::class,'delete']);
// Route::get('/',[UserController::class,'index']);
// Route::view('/user/search','agence.search');
// Route::post('/user/search',[UserController::class,'search']);


// cc
// Route::get('/',[tacheController::class,'index']);
// Route::post('/ajouter',[tacheController::class,'ajouter']);
// Route::get('/edit/{id}',[tacheController::class,'edit']);
// Route::post('/update/{id}',[tacheController::class,'update']);
// Route::get('/delete/{id}',[tacheController::class,'delete']);
// Route::view('/ajouter','test1.ajouter');
// Route::get('/',[playerController::class,'index']);
// Route::post('/ajouter',[playerController::class,'ajouter']);
// Route::get('/edit/{id}',[playerController::class,'edit']);
// Route::post('/update/{id}',[playerController::class,'update']);
// Route::get('/delete/{id}',[playerController::class,'delete']);
// Route::resource('taches', MyTacheController::class);
// Route::resource('personnes', PersonneController::class);
Route::view('/','tp.navbar');
Route::resource('groupes',GroupeController::class);
Route::resource('stagiaires',StagiaireController::class);


