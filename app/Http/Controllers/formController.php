<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    function store_data(Request $request)
    {
     $data = new students;
$data->name = $request->input('name');
$data->email = $request->input('email');
$data->password = $request->input('password');

$data->save();
return back();
// $data->back();

    }
}
