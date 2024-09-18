<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request) {
        //return('Upload Success');
        $path = $request->file('file')->store('','public');
        return view('display', ['path' => $path]);
    }
}
