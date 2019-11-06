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

Route::get('/',function(){
    return view('Layout.master');
})->name('dashboard');


Route::prefix('linh-vuc')->group(function(){
    Route::name('linh-vuc.')->group(function(){
        Route::get('/','LinhVucController@index')->name('table');
        Route::get('them-moi','LinhVucController@create')->name('them-moi');
        Route::post('them-moi','LinhVucController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}','LinhVucController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}','LinhVucController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}','LinhVucController@destroy')->name('xoa');
    });
});
Route::prefix('cau-hoi')->group(function(){
    Route::name('cau-hoi.')->group(function(){
        Route::get('/','CauHoiController@index')->name('table');
        Route::get('them-moi','CauHoiController@create')->name('them-moi');
        Route::post('them-moi','CauHoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}','CauHoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}','CauHoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}','CauHoiController@destroy')->name('xoa');
    });
});
Route::prefix('nguoi-choi')->group(function(){
    Route::name('nguoi-choi.')->group(function(){
        Route::get('/','NguoiChoiController@index')->name('table');
        Route::get('them-moi','NguoiChoiController@create')->name('them-moi');
        Route::post('them-moi','NguoiChoiController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}','NguoiChoiController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}','NguoiChoiController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}','NguoiChoiController@destroy')->name('xoa');
    });
});
Route::prefix('credit')->group(function(){
    Route::name('credit.')->group(function(){
        Route::get('/','CreditController@index')->name('table');
        Route::get('them-moi','CreditController@create')->name('them-moi');
        Route::post('them-moi','CreditController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}','CreditController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}','CreditController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}','CreditController@destroy')->name('xoa');
    });
});

Route::prefix('admin')->group(function(){
    Route::name('admin.')->group(function(){
        Route::get('/','AdminController@index')->name('table');
        Route::get('them-moi','AdminController@create')->name('them-moi');
        Route::post('them-moi','AdminController@store')->name('xu-ly-them-moi');
        Route::get('cap-nhat/{id}','AdminController@edit')->name('cap-nhat');
        Route::post('cap-nhat/{id}','AdminController@update')->name('xu-ly-cap-nhat');
        Route::get('xoa/{id}','AdminController@destroy')->name('xoa');
    });
});