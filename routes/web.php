<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\testProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/portfolio/{person}', [PortfolioController::class, 'show'])->name('portfolio.show');

Route::get('/product', [testProductController::class, 'index']);
Route::get('/product/show', [testProductController::class, 'show']); 
Route::get('/halaman',function(){ 
$title = 'Harry Pooter'; 
$content = 'harry potter and the deathly hallows: part 2'; 
return view('content.halaman',compact('title','content')); 
});
