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
    public function listingnft()
    {
        return $this->hasOne(ListingNft::class);
    }
}
