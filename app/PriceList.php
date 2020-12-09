<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    protected $fillable = ['productname','price','unity'];
}
