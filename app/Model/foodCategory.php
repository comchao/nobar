<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class foodCategory extends Model
{
    protected $table = 'foodcategorys';
    protected $fillable = [
        'foodcategoryid', 'foodcategory_Name', 'Discription'

    ];


}
