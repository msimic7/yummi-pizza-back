<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = ['name', 'price'];
    protected $hidden = ['created_at', 'updated_at'];
}
