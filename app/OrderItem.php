<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    //
    protected $fillable = [
        'Quantity','OrderItemPrice','SouvenirID','OrderID',
    ];

    public function souvenir(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Souvenir', 'SouvenirID', 'id');
    }

    public function order(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Order', 'OrderID', 'id');
    }
}
