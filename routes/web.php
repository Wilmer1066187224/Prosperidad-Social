<?php


/*DB::listen(function($query){
var_dump($query->sql);           agregar listener para er consultas sql que genera la aplICACION
});*/



use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MenssageController;
use App\Http\Controllers\RentaController;

use App\Models\Category;


   



Route::view('/','homee')->name('homee');

Route::view('/quienes-somos','about')->name('about');


/*Route::get('/portafolio',[ProjectController::class, 'index'])->name('projects.idex')->Middleware('auth');*/
Route::get('/Cronogramas',[ProjectController::class, 'index'])->name('projects.idex');
Route::get('/renta', [RentaController::class, 'index'] )->name('projects.renta');
Route::get('/rentajoven', [RentaController::class, 'rentajoven'] )->name('projects.rentajoven');
Route::get('/colombiamayor',[RentaController::class, 'colombiamayor'])->name('projects.colombiamayor');
Route::get('/novedades',[RentaController::class, 'novedades'])->name('projects.Novedades');
Route::get('/inclusion',[RentaController::class, 'inclusion'])->name('projects.Inclusion');





Route::get('categorias/{category}',[CategoryController::class,'show'])->name('categories.show');

Route::get('/portafolio/crear',[ProjectController::class, 'create'])->name('projects.create');
Route::get('/portafolio/{project}/editar',[ProjectController::class, 'edit'])->name('projects.edit');
Route::patch('/portafolio/{project}',[ProjectController::class, 'update'])->name('projects.update');


Route::post('/portafolio',[ProjectController::class, 'store'])->name('projects.store');
Route::get('/portafolio/{project}',[ProjectController::class, 'show'])->name('projects.show');

Route::delete('portafolio/{project}',[ProjectController::class, 'destroy'])->name('projects.destroy');

Route::patch('portafolio/{project}/restore',[ProjectController::class, 'restore'])->name('projects.restore');
Route::delete('portafolio/{project}/forceDelete',[ProjectController::class, 'forceDelete'])->name('projects.forceDelete');


Route::view('/contact','contact')->name('contact');
Route::post('contact',[MenssageController::class,'store'])->name('messages.store'); 
    
/* Route::resource('/portafolio',PortafolioController::class); */
Auth::routes(['register'=> true]);/*PARA DESHABILITAR LA VITA DE REGISTRO*/

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

/*Route::get('prueba', function(){
    $category = Category::find(3);

    dd($category->projects);

});*/