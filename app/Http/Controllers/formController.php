<?php

namespace App\Http\Controllers;

use App\Models\students;
use Illuminate\Http\Request;
// use App\Http\Controllers\students;
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

    function records()
    {
        $record = students::all();
        return view('records', compact('record'));
    }

    function delete_records($id)
    {
        students::destroy($id);
        return back();
    }
}
