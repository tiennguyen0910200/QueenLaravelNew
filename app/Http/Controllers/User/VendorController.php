<?php

namespace App\Http\Controllers\User;
use App\Models\Users;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VendorController extends Controller
{
    function index() {
        $vendor = Vendor::orderBy('created_at', 'desc')->take(6)
        ->get();
          //return response()->json($vendor);
          return json_encode($vendor);
    }
    
    function detail($id){
      $vendor = DB::table('vendors')->where("id",$id)->first();
      // $cate= ImageCategory::find($imagedetail->category_id);
      // $imagedetail->category_name = $cate->name;
     return json_encode($vendor);
    }
    function detailPlan($id){
      $vendor = DB::table('vendors')->where("id",$id)->first();
      // $cate= ImageCategory::find($imagedetail->category_id);
      // $imagedetail->category_name = $cate->name;
     return json_encode($vendor);
    }
    function newVendor(){
        $vendor = DB::table('vendors')
        ->orderBy('id', 'desc')->take(4)
        ->get();
          return response()->json($vendor);
    }
    function topVendor(){
      $vendor = DB::table('vendors')
      ->orderBy('created_at', 'desc')->take(4)
      ->get();
        return response()->json($vendor);
  }
  
    function search(Request $request)
    {
        $txt = $request->input('txtSearch');
        $search = DB::table('vendors')->where('fullname','LIKE','%'.$txt.'%')->get();
        return json_encode($search);
    }
}
