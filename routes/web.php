<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/auth/redirect/{option?}', function ($option) {
    
    if($option=='google'){
    return Socialite::driver('google')->redirect();
    }elseif($option=='facebook'){
    return Socialite::driver('facebook')->redirect();

    }
    

})->name('login');


Route::get('/auth/callback', function () {
 
    $user = Socialite::driver('google')->user();

    dd($user);
});

Route::get('/auth/facebook/callback',function(){
    $user = Socialite::driver('facebook')->user();

    dd($user);
});