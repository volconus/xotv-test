<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariants extends Model
{
    protected $table = 'product_variants';

    protected $fillable = ['name', 'product_id', 'price'];
}
