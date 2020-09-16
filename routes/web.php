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
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//frontend site........................................................

Route::get('/', 'HomeController@index');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/fibrocimento', function () {
    return view('pages.fibrocimento');
});

Route::get('/cabines', function () {
    return view('pages.cabines');
});

// Route::get('/contact', function () {
//     return view('pages.contact');
// });

Route::get('/contact', 'SendEmailController@index');
Route::post('/contact', 'SendEmailController@send');
Route::post('/job', 'SendEmailController@appointment');

Route::get('/oportunity', function () {
    return view('pages.oportunity');
});
//Route::get('/oportunity', 'CandidaturasController@index');
Route::get('/view_oportunity/{oportunity}', 'HomeController@oportunity_by_id');

//admin backend..........................................................
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SuperAdminController@index');
Route::post('/admin-dashboard', 'AdminController@dashboard');

Route::get('/add-oportunity', 'OportunityController@index');
Route::get('/all-oportunity', 'OportunityController@all_oportunity');
Route::post('/save-oportunity', 'OportunityController@save_oportunity');
Route::get('/edit-oportunity/{oportunity_id}', 'OportunityController@edit_oportunity');
Route::post('/update-oportunity/{oportunity_id}', 'OportunityController@update_oportunity');
Route::get('/delete-oportunity/{oportunity_id}', 'OportunityController@delete_oportunity');
Route::get('/unactive_oportunity/{oportunity_id}', 'OportunityController@unactive_oportunity');
Route::get('/active_oportunity/{oportunity_id}', 'OportunityController@active_oportunity');
