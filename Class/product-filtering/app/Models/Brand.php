<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public static function getAllBrand()
    {
        return [
            0=>[
                'brand_id'=>1,
                'brand_name'=>'Sony',
                'brand_image'=>'brand1.jpg'
            ],
            1=>[
                'brand_id'=>2,
                'brand_name'=>'Denim',
                'brand_image'=>'brand2.png'
            ],
            2=>[
                'brand_id'=>3,
                'brand_name'=>'Gucci',
                'brand_image'=>'brand3.jpg'
            ]
        ];
    }
}
