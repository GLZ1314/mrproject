<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    //
    protected $fillable = [
        'CartID', 'ItemCount', 'SouvenirID',
    ];

    public function souvenir(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Souvenir', 'SouvenirID', 'id');
    }
}
