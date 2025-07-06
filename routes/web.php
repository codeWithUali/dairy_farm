<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Milk\Record as MilkRecord;
use App\Livewire\Milk\History as MilkHistory;
use App\Livewire\Medicine\Record as MedicineRecord;
use App\Livewire\Medicine\History as MedicineHistory;

Route::get('/', Login::class)->name('login');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/milk/record', MilkRecord::class)->name('milk.record');
Route::get('/milk/history', MilkHistory::class)->name('milk.history');
Route::get('/medicine/record', MedicineRecord::class)->name('medicine.record');
Route::get('/medicine/history', MedicineHistory::class)->name('medicine.history');
