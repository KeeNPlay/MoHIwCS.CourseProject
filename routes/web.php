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
Route::view('/', 'login');

Route::get('/analytics-menu', function () {
    return view('analytics-menu');
})->middleware('auth');

Route::get('/management-menu', function () {
    return view('management-menu');
})->middleware('auth');

Route::get('/analytics/{company}', 'AnalyticsController@analyticsMachines')->middleware('auth');

Route::get('/management/{company}', 'ManagementController@management')->middleware('auth');

Route::get('/vehicle-card/{garageNumber}', 'AnalyticsController@vehicleCard')->middleware('auth');
Route::post('/axiosDelete','ManagementController@axiosDelete')->middleware('auth');
Route::post('/axiosUpdateObject','ManagementController@axiosUpdateObject')->middleware('auth');
Route::post('/axiosInsert','ManagementController@axiosInsert')->middleware('auth')->name('axiosInsert');

Route::post('/formUpdateInformation','AnalyticsController@updateInformation')->middleware('auth')->name('updateInformation');
Route::post('/formUpdateInformationUser','ManagementController@updateInformationUser')->middleware('auth')->name('updateInformationUser');

Route::get('/settings', 'ManagementController@settingList')->middleware('auth')->name('settings');

Route::name('user.')->group(function (){
    Route::get('/analytics-menu', function () {
        return view('analytics-menu');
    })->middleware('auth')->name('private');

    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', 'LoginController@login');

    Route::get('/logout', function (){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function () {
        if (Auth::check()) {
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', 'RegisterController@save');

});
