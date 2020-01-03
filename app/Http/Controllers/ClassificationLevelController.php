<?php namespace App\Http\Controllers\dataJson;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;  
use App\Models\Plan;
use App\Http\Controllers\BaseController;
use Datatables;
use Config;    
use Hash;

class ClassificationLevelController extends BaseController {
   

    public function search(){
        $term = Input::get('term');
        $result = Plan::where('level','LIKE','%$term%')->get();
        return Response::json($result);
    }

    public function dataJson(){
      $condition = \Input::all();
      $query = Plan::select();
      foreach($condition as $column => $value)
      {
        $query->where($column, '=', $value);
      }
      $plan = $query->select([ 'id as value','plan_name as text'])->get();

      return response()->json($plan);
    }

}
