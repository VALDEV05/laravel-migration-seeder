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

Route::get('/', 'PageController@index');


Route::get('/travels', 'TravelController@index')->name('travels');



/*
Model: Travel
Controller : travelController
Migration: travels
- id
- address
- city
- post_code
- rooms
- square_meters
- for_sale
- to_let
- is_available
Routes:
- travels
- travels/1
*/