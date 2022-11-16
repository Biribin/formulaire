<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;

use App\Models\Formulaire;



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

Route::get('/', [HomeController::class, 'home'])-> name('app_home');

Route::get('/about', [HomeController::class, 'about'])-> name('app_about');

Route::get( '/formulaire', [FormulaireController::class, 'Formulaire'])-> name('app_formulaire');

Route::post('/formulaire',function(){

    $formulaires= new Formulaire;
    $formulaires->email= request('email');
    $formulaires->name= request('name');
    $formulaires->adress= request('inputAddress');
    $formulaires->city= request('city');
    $formulaires->state= request('state');
    $formulaires->zip= request('zip');
    $formulaires->comment= request('comment');

    $formulaires->save();
    $formulaires=Formulaire::all();

     return view('home.dashboard',compact('formulaires'));
});


Route::match(['get','post'],'/dashboard',function(){
    $formulaires=Formulaire::all();

    return view('home.dashboard',compact('formulaires'));
})-> name('app_dashboard');









