<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
    Volt::route('/login', 'auth.login')->name('login');
    Volt::route('/register', 'auth.register')->name('register');
});
Route::middleware('auth')->group(function () {
    Volt::route('/logout', 'auth.logout')->name('logout');
    Volt::route('/', 'users.index')->name('users.index');
});
