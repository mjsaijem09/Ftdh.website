<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Input;


class PlanController extends Controller
{
     public function dataJson(){
      $condition = \Input::all();
      $query = Plan::select();
      foreach($condition as $column => $value)
      {
        $query->where($column, '=', $value);
      }
      $plans = $query->select([ 'id as value','plan_name as text'])->get();


      return response()->json($plans);
    }
}
