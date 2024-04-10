<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\ListingNft;
use App\Models\Nft;
use App\Models\User;
use Illuminate\Support\Arr;
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
    public function show_two(User $user, $id)
    {
        $user = User::find($id);
        // dd($user);
        $nfts = $user->nfts;
        $users = User::all();
        return view('max.colect.home', compact('user', 'nfts', 'users'));
    }
    public function our_clans()
    {
        $randomUser = User::inRandomOrder()->take(2)->get();
        $randomUsers = User::inRandomOrder()->take(3)->get();
        return view('rin.clans.our')->with(compact('randomUser', 'randomUsers'));
    }
    public function road_map()
    {
        return view('rin.clans.roadmap');
    }
    public function detail($id)
    {
        $nft = Nft::find($id);
        $users = User::all();
        $colects = Collection::all();
        $lists = ListingNft::all();
        $randomNFTs = Nft::inRandomOrder()->take(4)->get();
        return view('rin.clans.detail')->with(compact('users', 'lists', 'nft', 'randomNFTs', 'colects'));
    }
    public function faq()
    {
        $users = User::all();
        $colects = Collection::all();
        $lists = ListingNft::all();
        $randomNFTs = Nft::inRandomOrder()->take(4)->get();
        return view('rin.clans.faq')->with(compact('users', 'lists', 'randomNFTs', 'colects'));
    }
    public function collection()
    {
        $collection = Collection::all();
        return view('altyn.colect')->with(compact('collection'));
    }
    public function colect_two()
    {
        $collection = Collection::all();
        return view('altyn.colect-two')->with(compact('collection'));
    }
    public function profile($id)
    {
        $user = User::find($id);

        return view('max.colect.home')->with(compact('user', 'users'));
    }
    public function home()
    {
        $users = User::all();
        $colects = Collection::all();
        $lists = ListingNft::all();
        $nfts = Nft::inRandomOrder()->take(1)->get();
        $randomNFTs = Nft::inRandomOrder()->take(4)->get();
        return view('home')->with(compact('users', 'lists', 'nfts', 'randomNFTs', 'colects'));
    }
}
