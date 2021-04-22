<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class ProductController extends Controller
{
    function detail($id){
        $product = Product::find($id);
        // $cate= ImageCategory::find($imagedetail->category_id);
        // $imagedetail->category_name = $cate->name;
       return response()->json($product);
      }
      
}
