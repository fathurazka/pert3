<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request) {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            return view('display', ['path' => $path]);
        } else {
            $error = 'No file was uploaded. ';
            if ($request->file('file') === null) {
                $error .= 'File input is null. ';
            }
            if (!$request->hasFile('file')) {
                $error .= 'hasFile() returns false. ';
            }
            if (empty($request->allFiles())) {
                $error .= 'No files in request. ';
            }
            return back()->with('error', $error);
        }
    }
}