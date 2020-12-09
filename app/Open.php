<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Open extends Model
{
    protected $fillable = ['local','address','opened','mapindex'];
}
