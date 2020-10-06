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


//compressors...........................................................
Route::get('/compressors', function () {
    return view('view_compressors.compressors_content');
});

Route::get('/compressors/about-compressors', function () {
    return view('view_compressors.about_compressors');
});

Route::get('/compressors/assistencia-tecnica', function () {
    return view('view_compressors.assistencia_tecnica');
});

Route::get('/compressors/contratos', function () {
    return view('view_compressors.contratos');
});

Route::get('/product_by_subcategory/{id}{subcategories_id}', 'HomeController@show_product_by_subcategory');
Route::get('/view_product/{product_id}', 'HomeController@product_details_by_id');


//technologies.............................................................
Route::get('/technologies', function () {
    return view('view_technologies.technologies_content');
});

Route::get('/technologies/about-technologies', function () {
    return view('view_technologies.about_technologies');
});

Route::get('/technologies/remocao-de-amianto-fibrocimento', function () {
    return view('view_technologies.remocao');
});

Route::get('/technologies/aplicacao-coberturas', function () {
    return view('view_technologies.coberturas');
});

Route::get('/technologies/estrutura-metalica', function () {
    return view('view_technologies.metalica');
});

Route::get('/technologies/obras', 'HomeController@show_projects');
Route::get('/view_obra/{project_id}', 'HomeController@project_details_by_id');

//medical...............................................................
Route::get('/medical', function () {
    return view('view_medical.medical_content');
});

Route::get('/medical/about-medical', function () {
    return view('view_medical.about_medical');
});

Route::get('/medical/cadeira-de-rodas', function () {
    return view('view_medical.cadeira');
});

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

//categoria relacionada
Route::get('/add-category', 'CategoryController@index');
Route::get('/all-category', 'CategoryController@all_category');
Route::post('/save-category', 'CategoryController@save_category');
Route::get('/edit-category/{category_id}', 'CategoryController@edit_category');
Route::post('/update-category/{category_id}', 'CategoryController@update_category');
Route::get('/delete-category/{category_id}', 'CategoryController@delete_category');
Route::get('/unactive_category/{category_id}', 'CategoryController@unactive_category');
Route::get('/active_category/{category_id}', 'CategoryController@active_category');

//subcategoria relacionada
Route::get('/add-subcategory', 'SubcategoryController@index');
Route::post('/save-subcategory', 'SubcategoryController@save_subcategory');
Route::get('/all-subcategory', 'SubcategoryController@all_subcategory');
Route::get('/delete-subcategory/{subcategories_id}', 'SubcategoryController@delete_subcategory');
Route::get('/edit-subcategory/{subcategories_id}', 'SubcategoryController@edit_subcategory');
Route::post('/update-subcategory/{subcategories_id}', 'SubcategoryController@update_subcategory');
Route::get('/unactive_subcategory/{subcategories_id}', 'SubcategoryController@unactive_subcategory');
Route::get('/active_subcategory/{subcategories_id}', 'SubcategoryController@active_subcategory');

//produtos relacionados
Route::get('/add-product', 'ProductController@index');
Route::post('/save-product', 'ProductController@save_product');
Route::get('/all-product', 'ProductController@all_product');
Route::get('/unactive_product/{product_id}', 'ProductController@unactive_product');
Route::get('/active_product/{product_id}', 'ProductController@active_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');

//especificacoes relacionados
Route::get('/add-specification', 'SpecificationController@index');
Route::post('/save-specification', 'SpecificationController@save_specification');
Route::get('/all-specification', 'SpecificationController@all_specification');
Route::get('/unactive_specification/{specification_id}', 'SpecificationController@unactive_specification');
Route::get('/active_specification/{specification_id}', 'SpecificationController@active_specification');
Route::get('/delete-specification/{specification_id}', 'SpecificationController@delete_specification');
Route::get('/edit-specification/{specification_id}', 'SpecificationController@edit_specification');
Route::post('/update-specification/{specification_id}', 'SpecificationController@update_specification');

//obras relacionados
Route::get('/add-project', 'ProjectController@index');
Route::post('/save-project', 'ProjectController@save_project');
Route::get('/all-project', 'ProjectController@all_project');
Route::get('/unactive_project/{project_id}', 'ProjectController@unactive_project');
Route::get('/active_project/{project_id}', 'ProjectController@active_project');
Route::get('/delete-project/{project_id}', 'ProjectController@delete_project');
Route::get('/edit-project/{project_id}', 'ProjectController@edit_project');
Route::post('/update-project/{project_id}', 'ProjectController@update_project');