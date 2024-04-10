<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CollectionController extends Controller
{
    public function show($id)
    {
        if (Route::is('colect.show')) {
            $collection = Collection::findOrFail($id);

            $nfts = $collection->nfts;

            return view('rin.create.colects', compact('nfts', 'collection'));
        } else {
            return view('rin.create.new-colect');
        }
    }
    public function create()
    {
        $request = request()->validate([
            'name' => 'required|min:5|max:10',
            'img' => 'required|image',
        ]);

        $path = '';
        $fillname = '';

        if (request()->has('img')) {
            $file = request()->file('img');
            $exten = $file->getClientOriginalExtension();
            $fillname = time() . '.' . $exten;
            $path = 'storage/colect/';
            $file->move($path, $fillname);
        }

        $colect = auth()->user()->collections()->create([
            'name' => $request['name'],
            'img' => $path . $fillname,
        ]);

        return redirect('/colect')->with('message', 'Collection created Successfully');
    }
}
