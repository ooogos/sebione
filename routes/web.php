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

// Route::get('/', function () {
//     return view('welcome');
//     // return 'Hello world!';
// });

// Route::get('/about', function () {
//     // return view('welcome');
//     return 'This is the about page';
// });

// Route::get('/login', function () {
//     return view('login');
//     // return 'This is the about page';
// });

Route::get('/' , 'pagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/employees', 'pagesController@employee')->name('employees');

//Create Department - Pages
Route::get('/create/department', 'HomeController@createDept')->name('createDept');
Route::post('/create/department', 'HomeController@storeDept')->name('storeDept');

Route::get('/edit/department/{id}', 'HomeController@editDept')->name('editDept');
Route::post('/update/department/{id}', 'HomeController@updateDept')->name('updateDept');

Route::delete('/delete/department/{id}', 'HomeController@deleteDept')->name('deleteDept');


//Create Employee - Pages
Route::get('/create/employee', 'pagesController@createEmp')->name('createEmp');
Route::post('/create/employee', 'pagesController@storeEmp')->name('storeEmp');

Route::get('/edit/employee/{id}', 'pagesController@editEmp')->name('editEmp');
Route::post('/update/employee/{id}', 'pagesController@updateEmp')->name('updateEmp');

Route::delete('/delete/employee/{id}', 'pagesController@deleteEmp')->name('deleteEmp');

