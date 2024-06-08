<?php

use App\Http\Controllers\laravelController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\BranchAndPathCoverageNotSupportedException;



Route::get('form',function()
{
return view('form');
    
});

Route::post('store_data',[\App\Http\Controllers\formController::class,'store_data']);