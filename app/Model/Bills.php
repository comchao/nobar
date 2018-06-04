<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    protected $fillable = [
        'id', 'id_orders', 'id_menus'
        , 'cashier', 'number', 'total',
        'discount', 'total_amount'

    ];
}
