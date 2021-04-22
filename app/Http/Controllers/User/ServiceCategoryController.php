<?php

namespace App\Http\Controllers\User;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    function index(){
        $service = DB::table('service_category')
          ->take(4)
          ->orderBy('service_category.created_at', 'desc')
          ->get();
          return response()->json($service);       
    }
    function detail($id){
        $service = DB::select("select p.category_id,p.id, p.name_product, p.picture from products as p, service_category as s  where s.id = $id and s.id = p.category_id");
        $decription = ServiceCategory::find($id)->description;
        $data = array(
            "service"=>$service,
            "description"=>$decription
        ); 
        return response()->json($data,200);
    }
}
