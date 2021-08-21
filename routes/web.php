<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'PagesController@index')->name('home');

Route::prefix('admin')->group(function(){    
    Route::get('/dashboard', 'MainPagesController@dashboard')->name('admin.dashboard');
    Route::get('/main', 'MainPagesController@index')->name('admin.main');
    Route::put('/main', 'MainPagesController@update')->name('admin.main.update');
    Route::get('/about/create', 'AboutPagesController@create')->name('admin.about.create');
    Route::post('/about/create', 'AboutPagesController@store')->name('admin.about.store');
    Route::get('/about/list', 'AboutPagesController@list')->name('admin.about.list');
    Route::get('/about/edit/{id}', 'AboutPagesController@edit')->name('admin.about.edit');
    Route::post('/about/update/{id}', 'AboutPagesController@update')->name('admin.about.update');
    Route::delete('/about/destroy/{id}', 'AboutPagesController@destroy')->name('admin.about.destroy');
    Route::get('/portfolios/create', 'PortfolioPagesController@create')->name('admin.portfolios.create');
    Route::put('/portfolios/create', 'PortfolioPagesController@store')->name('admin.portfolios.store');
    Route::get('/portfolios/list', 'PortfolioPagesController@list')->name('admin.portfolios.list');
    Route::get('/portfolios/edit/{id}', 'PortfolioPagesController@edit')->name('admin.portfolios.edit');
    Route::post('/portfolios/update/{id}', 'PortfolioPagesController@update')->name('admin.portfolios.update');
    Route::delete('/portfolios/destroy/{id}', 'PortfolioPagesController@destroy')->name('admin.portfolios.destroy');
    Route::get('/resume/create', 'ResumePagesController@create')->name('admin.resume.create');
    Route::put('/resume/create', 'ResumePagesController@store')->name('admin.resume.store');
    Route::get('/resume/list', 'ResumePagesController@list')->name('admin.resume.list');
    Route::get('/resume/edit/{id}', 'ResumePagesController@edit')->name('admin.resume.edit');
    Route::post('/resume/update/{id}', 'ResumePagesController@update')->name('admin.resume.update');
    Route::delete('/resume/destroy/{id}', 'ResumePagesController@destroy')->name('admin.resume.destroy');
    Route::get('/experience/create', 'ExperiencePagesController@create')->name('admin.experience.create');
    Route::put('/experience/create', 'ExperiencePagesController@store')->name('admin.experience.store');
    Route::get('/experience/list', 'ExperiencePagesController@list')->name('admin.experience.list');
    Route::get('/experience/edit/{id}', 'ExperiencePagesController@edit')->name('admin.experience.edit');
    Route::post('/experience/update/{id}', 'ExperiencePagesController@update')->name('admin.experience.update');
    Route::delete('/experience/destroy/{id}', 'ExperiencePagesController@destroy')->name('admin.experience.destroy');
    Route::get('/me/create', 'MePagesController@create')->name('admin.me.create');
    Route::put('/me/create', 'MePagesController@store')->name('admin.me.store');
    Route::get('/me/list', 'MePagesController@list')->name('admin.me.list');
    Route::get('/me/edit/{id}', 'MePagesController@edit')->name('admin.me.edit');
    Route::post('/me/update/{id}', 'MePagesController@update')->name('admin.me.update');
    Route::delete('/me/destroy/{id}', 'MePagesController@destroy')->name('admin.me.destroy');
});

Route::post('/contact','ContactFormController@store')->name('contact.store');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
