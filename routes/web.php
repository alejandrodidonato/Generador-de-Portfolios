<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Project;
use App\Models\Work;

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

    if($user) {

        //dd($user);
        return view('home')->with('user', $user)->with('project', $project)->with('work', $work);

        
    }
    else
    {
        abort(404, 'Página no encontrada');
    }

    
    
    

});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
