<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NftController extends Controller
{
    public function colect()
    {
        $newCol = true;
        return redirect('/create')->with(compact('newCol'));
    }
}
