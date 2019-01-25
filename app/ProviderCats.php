<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderCats extends Model
{
    protected $table = 'provider_cats';

    protected $fillable = ['name', 'status'];

}
