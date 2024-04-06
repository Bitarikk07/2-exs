<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\ListingNft;
use App\Models\Nft;
use Illuminate\Http\Request;

class RowController extends Controller
{
    public function create()
    {
        $colect = Collection::all();
        return view('rin.create.create')->with(compact('colect'));
    }
    public function listing($id)
    {
        $nft = Nft::find($id);
        if ($nft->show == '1') {

            return view('rin.create.listing')->with(compact('nft'));
        }
        return redirect()->back();
    }
    public function list($id)
    {
        $list = ListingNft::find($id);

        return view('rin.create.list')->with(compact('list'));
    }

    public function show()
    {
        return view('rin.create.show');
    }
    public function our_clans()
    {
        return view('rin.clans.our');
    }
    public function road_map()
    {
        return view('rin.clans.roadmap');
    }
}
