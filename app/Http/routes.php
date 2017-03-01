<?php

use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {

    Route::get('/test', 'TestController@main');
    
    Route::get('/', 'HomeController@main');
    Route::get('/home', 'HomeController@main');
    
    Route::get('/login', 'LoginController@main');
    Route::post('/login', 'LoginController@main');
    
    Route::get('/logout', 'LogoutController@main');
    
    Route::get('/team', 'TeamController@main');
    
    Route::get('/projects', 'ProjectsController@main');
    
    Route::get('/project/{id}', 'ProjectController@main');
    
    Route::get('/inscription', 'InscriptionController@main');
    Route::post('/inscription', 'InscriptionController@main');
    
    Route::get('/private-home', 'PrivateHomeController@main');
    
    Route::get('/data', 'DataController@main');
    Route::get('/edit-texts', 'DataController@main');
    
     Route::get('/admin', 'AdminController@main');
      Route::get('/manage-members', 'AdminController@main');
      
    Route::get('/profil/{id}', 'ProfilController@main');
    
    //Route::get('auth/login', 'Auth\AuthController@getLogin');
    
    //Route::get('auth/login', 'Auth\AuthController@getLogin');
    
    //Route::get('/project/{id}', 'ProjectController@main');
    
    
    
});
