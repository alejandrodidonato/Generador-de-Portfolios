<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Project;
use App\Models\Work;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfSkillController;

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



Route::get('home/{slug}', function ($slug) {
    
    
    $user = User::with('skill', 'education','service','project', 'work', 'post')->where('slug', $slug)->first();
    $project = Project::with('testimonial')->get();
    $work = Work::with('responsability')->get();


    return view('home')->with('user', $user)->with('project', $project)->with('work', $work);

        
    


});

Route::resource('user', UserController::class)->except([
        'show'
    ]);

Route::resource('skill', SkillController::class)->except([
        'show'
    ]);

    Route::resource('service', ServiceController::class)->except([
        'show'
    ]);

    Route::resource('profskill', ProfSkillController::class)->except([
        'show'
    ]);


    Route::get('logout-user', UserController::class.'@logout_user')->name('logout-user');

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
*/

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::group(['middleware' => ['role:client']], function() {
 
        Route::get('/dashboard', function(){
            return view('admin.dashboard');
 
        })->name('dashboard');
 
        Route::resource('user', UserController::class)->except([
            'show'
        ]);
 
        Route::resource('skill', SkillController::class)->except([
            'show'
        ]);

        Route::resource('service', ServiceController::class)->except([
            'show'
        ]);

        Route::resource('profskill', ProfSkillController::class)->except([
            'show'
        ]);
 
    });
 
 
 Route::group(['middleware' => ['role:client']], function() {
 
    Route::get('my-portfolio', UserController::class.'@my_portfolio')->name('my-portfolio');
    Route::put('updateClient', UserController::class.'@updateClient')->name('updateClient');
    Route::put('updateAbout', UserController::class.'@updateAbout')->name('updateAbout');
    Route::put('updateService', UserController::class.'@updateService')->name('updateService');
    Route::put('updateServiceTitle', UserController::class.'@updateServiceTitle')->name('updateServiceTitle');
    Route::put('updateSkillTitle', UserController::class.'@updateSkillTitle')->name('updateSkillTitle');
    Route::put('updateProfSkillTitle', UserController::class.'@updateProfSkillTitle')->name('updateProfSkillTitle');
    Route::put('update', ServiceController::class.'@update')->name('update');
    Route::put('update', SkillController::class.'@update')->name('update');
    Route::put('update', ProfSkillController::class.'@update')->name('update');
    Route::delete('delete', SkillController::class.'@delete')->name('delete');
    Route::delete('delete', ProfSkillController::class.'@delete')->name('delete');
 
});
 
 
});
 
 
