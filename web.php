<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/home','pagecontrollers@tourism' );  


Route::get('/destination','pagecontrollers@tourism' );  


Route::get('/places/{id}','pagecontrollers@places' );  


Route::get('/packages','pagecontrollers@tourism' );  


Route::get('/signup','pagecontrollers@tourism' );  


Route::get('/contact','pagecontrollers@tourism' ); 


Route::get('/signup/create','database@create'); //Passing value to table 

Route::post('/store','pagecontrollers@store' ); //this is to store the data passed
?> 
