<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    protected $fillable = ['id','package_name','data_filter','class'];
}
