<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('country', 'CountryCountryController@country' );
//Route::get('country/{id}', 'CountryCountryController@countryById');
//Route::post('country', 'CountryCountryController@countrySave');
//Route::put('country/{id}', 'CountryCountryController@countryUpdate');
//Route::delete('country/{id}', 'CountryCountryController@countryDelete');
//Route::group(['middleware' => 'auth:api'], function () {
//    Route::apiResource('countryApi', 'Country');
//});
Route::apiResource('countryApi', 'Country');
Route::get('file/country_list', 'FileController@countryList');
Route::post('file/country_list, FileController@countrySave');
