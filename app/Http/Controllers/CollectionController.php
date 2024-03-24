<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function show()
    {
        return view('rin.create.new-colect');
    }
    public function create()
    {
        $request = request()->validate([
            'name' => 'required|min:5|max:10',
            'img' => 'required|image',
        ]);
        if (request()->has('img')) {
            $file = request()->file('img');
            $exten = $file->getClientOriginalExtension();
            $fillname = time() . '.' . $exten;
            $path = 'storage/colect/';
            $file->move($path, $fillname);
        }
        // dd($request);
        Collection::create([
            'name' => $request['name'],
            'img' => $path . $fillname,
        ]);
        return redirect('/colect')->with('message', 'Idea created Successfully');
    }
}
