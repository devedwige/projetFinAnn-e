<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Parentcontroller;
use App\Http\Controllers\Enfantcontroller;
use App\Http\Controllers\Admincontroller;
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
})->name('welcome');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
     Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('loginin', 'loginAction')->name('login.action');



    Route::get('logout', 'logout')->middleware('auth')->name('logout.get');
    // Route::post('logout', 'loginAction')->middleware('auth')->name('logout.post');

    // pour les parents
    // Route::get('parent', 'parent')->name('parent');
    Route::get('consultation', 'consultation')->name('consultation');
    Route::post('consultationa', 'consultationSave')->name('consultation.save');

    Route::get('vac', 'vac')->name('vac');
     Route::post('vaccinationa', 'vaccinationSave')->name('vaccination.save');
        // pour les parents
    // Route::get('parent', 'parent')->name('parent');
    Route::get('vaccination', 'vaccination')->name('vaccination');
    Route::get('vaccin', 'vaccin')->name('vaccin');
    Route::get('polio', 'polio')->name('polio');
    Route::get('agent', 'agent')->name('agent');
    Route::get('service', 'service')->name('service');
// pour le suivi de croissance

    Route::get('suivi', 'suivi')->name('suivi');
    Route::post('suivina', 'suiviSave')->name('suivi.save');

    Route::get('rende', 'rende')->name('rende');
    Route::post('rendea', 'rendeSave')->name('rende.save');


});

Route::controller(Parentcontroller::class)->group(function () {
    Route::get('parent', 'parent')->name('parent');
    Route::post('parent/save', 'parentSave')->name('parent.save'); // Changement ici

    Route::get('parentlogin', 'parentlogin')->name('parentlogin');
    Route::post('parentlogin/action', 'parentAction')->name('parentlogin.action'); // Changement ici
});



 Route::controller(Enfantcontroller::class)->group(function () {
    Route::get('enfant', 'enfant')->name('enfant');
    Route::post('enfant', 'enfantSave')->name('enfant.save');
    // Route::post('parent', 'parentSave')->name('parent.save');

         Route::get('enfantconnect', 'enfantconnect')->name('enfantconnect');
        Route::post('login', 'enfantAction')->name('enfant.action');

        Route::get('croissance', 'croissance')->name('croissance');
        // Route::get('logout', 'logout')->middleware('auth')->name('logout');

        Route::get('admin', 'admin')->name('admin');
        // Route::post('login', 'enfantAction')->name('enfant.action');
        Route::get('adminvac', 'adminvac')->name('adminvac');
        Route::get('adminagent', 'adminagent')->name('adminagent');
        Route::get('adminparent', 'adminparent')->name('adminparent');
        Route::get('adminsuivis', 'adminsuivis')->name('adminsuivis');
        Route::get('adminconsultation', 'adminconsultation')->name('adminconsultation');
        Route::get('adminrende', 'adminrende')->name('adminrende');
        // Route::get('statistique', 'statistique')->name('statistique');
        Route::get('statistique/{code}', 'statistique')->name('statistique');

     });
