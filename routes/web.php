<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Landing page - accessible to all
Volt::route('/', 'landing')->name('landing');

// Authentication routes
Route::middleware('guest')->group(function () {
    Volt::route('/login', 'auth.login')->name('login');
    Volt::route('/register', 'auth.register')->name('register');
});

// Protected routes
Route::middleware('auth')->group(function () {
    Volt::route('/logout', 'auth.logout')->name('logout');
    Volt::route('/dashboard', 'dashboard')->name('dashboard');
    Volt::route('/users', 'users.index')->name('users.index');
});
