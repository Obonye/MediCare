<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\navbarController;

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
//All lsitings
/*
Route::get('/',function(){
    return view('listings',[
        'heading'=>'Latest Listings',
        'listings'=>Listing::all()
        
    ]);
});
//Single Listing
Route::get('/listing{id}',function($id){
    return view ('listing',[
        'listing'=>Listing::find($id)
    ]);
});
*****/
//homepage route
Route::get('/',function(){
    return view('homepage');
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/signup',function(){
    return view('signup');
});
Route::get('/sysAdmin',function(){
    return view('sys_admin_dashboard');
});
//Route::get('/dashboard',[navbarController::class,'getName']);