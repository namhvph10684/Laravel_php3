<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'thumbnail_url',
    ];

       public function products(){
           return $this->hasMany(Product::class,'category_id','id');
       }

    // public function products() {
    //     return $this->belongsToMany(
    //         Product::class,
    //         'category_product', // bang trung gian
    //         'category_id', // khoa ngoai tuong ung voi model hien tai
    //         'product_id', // khoa ngoai cua bang con lai
    //     );
    // }


}
