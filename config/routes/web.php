<?php

/**
 * --------------------------------------------------------------------------
 * Routes
 * --------------------------------------------------------------------------
 * 
 * Here is where you can register routes for your application.
 * Now create something great!
 * 
 */

use App\Core\Routing\Route;

Route::get('/', function () {
    $pageTitle = "Welcome";
    return view('/welcome', compact('pageTitle'));
});

Route::get('/home', ['WelcomeController@home', ['auth']]);

Route::controller(['CrudController', ['auth']], function () {
    Route::get('/crud', 'index');
    Route::post('/crud_add', 'store');
    Route::get('/crud_edit/{id}', 'edit');
    Route::post('/crud_update', 'update');
    Route::post('/crud_delete', 'deleteItem');
});
