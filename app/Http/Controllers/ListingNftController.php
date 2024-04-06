<?php

namespace App\Http\Controllers;

use App\Models\ListingNft;
use App\Models\Nft;
use Illuminate\Http\Request;

class ListingNftController extends Controller
{
    public function listing($id, ListingNft $listing, Nft $nft)
    {
        $request = request()->validate([
            'price' => 'required|min:1',
            'currency' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        $listing = new ListingNft([
            'price' => $request['price'],
            'currency' => $request['currency'],
            'start' => $request['start'],
            'end' => $request['end'],
            'nft_id' => $id, // Предполагается, что $id содержит айди НФ// Устанавливаем user_id текущего пользователя
        ]);
        $listing->user_id = auth()->user()->id;
        $listing->save();
        return redirect('/list/' . $listing->id)->with('message', 'Holpol');
    }
}
