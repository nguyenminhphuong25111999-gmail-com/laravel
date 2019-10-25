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

Route::get('/', function () {
	return view('welcome');

});


Route::group(['namespace'=>'Admin'], function(){
	// https://localhost/project/login => page login
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogedIn'], function(){
		Route::get('/', 'LoginAdminController@getLoginAdmin') ;
		Route::post('/', 'LoginAdminController@postLoginAdmin');
	});
	// 
	Route::get('logout', 'HomeController@getLogout');
	// https://localhost/project/admin/home => page index
	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedOut'], function(){
		Route::get('home', 'HomeController@getHome');



		//https://loaclhost/project/admin/account_admin => page account admin 
		Route::group(['prefix'=>'account_admin'], function(){
			Route::get('/','AccountAdminController@getAccountAdmin');
			Route::post('/','AccountAdminController@postAccountAdmin');

			//Route edit account admin
			Route::get('edit/{id}', 'AccountAdminController@getEditAccountAdmin');
			Route::post('edit/{id}', 'AccountAdminController@postEditAccountAdmin');
			//Route delete account admin
			Route::get('delete/{id}', 'AccountAdminController@getDeleteAccountAdmin');
		});
		//End group account admin

		//https://loaclhost/project/admin/account_admin => page account admin 
		Route::group(['prefix'=>'account_user'], function(){
			Route::get('/','AccountUserController@getAccountUser');
		});
		//End group account admin

		//https://loaclhost/project/admin/account_admin => page account admin 
		Route::group(['prefix'=>'management_question'], function(){
			Route::get('/','ManagementQuestionController@getQuestion');
			Route::post('/','ManagementQuestionController@postQuestion');

			//Route edit question
			Route::get('edit/{id}', 'ManagementQuestionController@getEditQuestion');
			Route::post('edit/{id}', 'ManagementQuestionController@postEditQuestion');
			//Route delete question
			Route::get('delete/{id}', 'ManagementQuestionController@getDeleteQuestion');
		});
		//End group account admin

		//https://loaclhost/project/admin/account_admin => page account admin 
		Route::group(['prefix'=>'history_buy_credit'], function(){
			Route::get('/','HistoryBuyCreditController@getHBCredit');
		});
		//End group account admin

		//https://loaclhost/project/admin/account_admin => page account admin 
		Route::group(['prefix'=>'management_credit'], function(){
			Route::get('/','ManagementCreditController@getCredit');
		});
		//End group account admin

		
	});
	//
});
