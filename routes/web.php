<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

// Route::get('/', function () {
//     return view('welcome');
// });

// RoutE::get('/',function(){
//     return view('expenses.index');
// });

//Route::get('/', function() {
//    return redirect()->route('expenses.index');
//});

Route::get('/',function(){
    return view('expenses.index');
});

Route::resource('expenses', ExpenseController::class); 
  