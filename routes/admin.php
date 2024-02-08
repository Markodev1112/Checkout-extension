<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    /* session()->flash('swal', [
        "icon" => "error",
        "title" => "Oops...",
        "text" => "Something went wrong!",
        "footer" => '<a href="#">Why do I have this issue?</a>'
    ]); */
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/categories', CategoryController::class)
    ->except('show');