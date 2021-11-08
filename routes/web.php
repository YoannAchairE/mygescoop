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
|


Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/',"StudentController@index") ;
Route::get('/edit/{id}',"StudentController@edit") ;
Route::get('/show/{id}',"StudentController@show") ;
Route::get('/create',"StudentController@create") ;
Route::post('/store',"StudentController@store") ;
Route::post('/update/{id}',"StudentController@update") ;

Route::get('activites/','ActiviteController@index') ;
Route::get('actualites/','ActualiteController@index') ;
Route::get('depenses/','DepenseController@index') ;
Route::get('personnes/','PersonneController@index') ;
Route::get('recettes/','RecetteController@index') ;
Route::get('subventions/','SubventionController@index') ;

Route::get('activites/edit1/{idacti}',"ActiviteController@edit1") ;
Route::get('actualites/edit2/{idactu}',"ActualiteController@edit2") ;
Route::get('depenses/edit3/{iddep}',"DepenseController@edit3") ;
Route::get('personnes/edit4/{idpers}',"PersonneController@edit4") ;
Route::get('recettes/edit5/{idrec}',"RecetteController@edit5") ;
Route::get('subventions/edit6/{idsub}',"SubventionController@edit6") ;

Route::get('activites/show1/{idacti}',"ActiviteController@show1") ;
Route::get('actualites/show2/{idactu}',"ActualiteController@show2") ;
Route::get('depenses/show3/{iddep}',"DepenseController@show3") ;
Route::get('personnes/show4/{idpers}',"PersonneController@show4") ;
Route::get('recettes/show5/{idrec}',"RecetteController@show5") ;
Route::get('subventions/show6/{idsub}',"SubventionController@show6") ;

Route::get('activites/create1','ActiviteController@create1') ;
Route::get('actualites/create2','ActualiteController@create2') ;
Route::get('depenses/create3','DepenseController@create3') ;
Route::get('personnes/create4','PersonneController@create4') ;
Route::get('recettes/create5','RecetteController@create5') ;
Route::get('subventions/create6','SubventionController@create6') ;


Route::post('/store1',"ActiviteController@store1") ;
Route::post('/store2',"ActualiteController@store2") ;
Route::post('/store3',"DepenseController@store3") ;
Route::post('/store4',"PersonneController@store4") ;
Route::post('/store5',"RecetteController@store5") ;
Route::post('/store6',"SubventionController@store6") ;

Route::post('activites/update1/{idacti}',"ActiviteController@update1") ;
Route::post('actualites/update2/{idactu}',"ActualiteController@update2") ;
Route::post('depenses/update3/{iddep}',"DepenseController@update3") ;
Route::post('personnes/update4/{idpers}',"PersonneController@update4") ;
Route::post('recettes/update5/{idrec}',"RecetteController@update5") ;
Route::post('subventions/update6/{idsub}',"SubventionController@update6") ;

Route::get('/inscription', function () {
    return view('inscription');
});



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('admin/login','Auth\AdminAuthController@getLogin')->name('adminLogin');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name('adminLoginPost');
Route::get('admin/logout', 'Auth\AdminAuthController@logout')->name('adminLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function () {
	// Admin Dashboard
	Route::get('dashboard','AdminController@dashboard')->name('dashboard');	
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
