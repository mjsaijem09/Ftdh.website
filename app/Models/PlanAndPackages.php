<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanAndPackages extends Model
{
    protected $fillable = ['package_id','information','plan_image','plan_id','details','status'];
}
