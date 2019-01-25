<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    protected $table = 'providers';

    protected $fillable = ['name', 'cat_id', 'status'];
}
