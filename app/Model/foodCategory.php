<?php

namespace App\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class foodCategory extends Authenticatable
{
    protected $table = 'foodcategorys';
    protected $fillable = [
        'foodcategoryid', 'foodcategory_Name', 'Discription'

    ];
}
