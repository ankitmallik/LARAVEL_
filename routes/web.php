<?php

use App\Http\Controllers\laravelController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\BranchAndPathCoverageNotSupportedException;



Route::get('form',function()
{
return view('form');
    
});
// insert data in database
Route::post('store_data',[\App\Http\Controllers\formController::class,'store_data']);

// fetch data 
Route::get('record',[\App\Http\Controllers\formController::class,'records']);

// delete data
Route::get('delete_record/{id}',[\App\Http\Controllers\formController::class,'delete_records']);

