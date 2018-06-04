<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $fillable = [
        'id', 'menu', 'price','foodcategoryid'

    ];
    public function foodCategory()
    {
        //สร้างความสัมพันธ์  ตาราง Menus และ foodCategory
        return $this->hasMany(foodCategory::class,'foodcategoryid','foodcategoryid');
    }


}
