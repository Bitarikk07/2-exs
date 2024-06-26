<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nft extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'other',
        'img',
        'show'
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function listing_nft()
    {
        return $this->hasOne(ListingNft::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
