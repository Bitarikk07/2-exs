<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function create()
    {
        return view('upload.form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|alpha_num',
            'file' => 'required|image',
            'description' => 'required'
        ]);
        $fileUpload = new File;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $file->move('uploads', $fileName);
            $fileUpload->name = $request->name;
            $fileUpload->description = $request->description;
            $fileUpload->file_path = $fileName;
            $fileUpload->save();
            return back()
                ->with('success', 'File has been uploaded.')
                ->with('file', $fileName);
        }
    }
    public function display()
    {
        //for demo purposes we'll access the first file
        $file = File::first();
        return view('rin.create.show')->with(compact('file'));
    }
}
