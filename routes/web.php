<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect()->route('home');
});

Route::middleware('auth')->group(function(){
    Route::get('/home', \App\Livewire\Home::class)->name('home');
    Route::get('/chat/{chat}', \App\Livewire\Chat\Show::class)->name('chat.show');
});

Route::middleware('guest')->group(function(){
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');
});
