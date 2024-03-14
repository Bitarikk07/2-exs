<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RowController extends Controller
{
    public function create()
    {
        return view('rin.create.create');
    }
    public function show()
    {
        return view('rin.create.show');
    }
}
