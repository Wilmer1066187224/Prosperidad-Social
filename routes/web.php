<?php
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MenssageController;

Route::view('/','homee')->name('homee');

Route::view('/quienes-somos','about')->name('about');


Route::get('/portafolio',[ProjectController::class, 'index'])->name('projects.idex');
Route::get('/portafolio/crear',[ProjectController::class, 'create'])->name('projects.create');
Route::get('/portafolio/{project}/editar',[ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portafolio/{project}',[ProjectController::class, 'update'])->name('projects.update');


Route::post('/portafolio',[ProjectController::class, 'store'])->name('projects.store');
Route::get('/portafolio/{project}',[ProjectController::class, 'show'])->name('projects.show');

Route::delete('portafolio/{project}',[ProjectController::class, 'destroy'])->name('projects.destroy');


Route::view('/contact','contact')->name('contact');
Route::post('contact',[MenssageController::class,'store'])->name('messages.store'); 
    
/* Route::resource('/portafolio',PortafolioController::class); */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
