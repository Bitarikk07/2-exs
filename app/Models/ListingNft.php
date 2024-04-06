<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingNft extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'price',
        'start',
        'end',
        'currency',
        'show',
        'nft_id'
    ];
    public function nft()
    {
        return $this->belongsTo(Nft::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
