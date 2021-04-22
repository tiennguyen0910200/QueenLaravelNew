<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Product;

class ServiceController extends Controller
{
    //
    function getAllCategory1(){
        $cate1 = Product::where('category_id', '=', 1)->take(4)->get();
        $category = ServiceCategory::all();
        return json_encode($cate1);
    }
    function getAllCategory11(){
        $cate11 = Product::where('category_id', '=', 1)->take(8)->get();
        $category = ServiceCategory::all();
        return json_encode($cate11);
    }
    function getAllCategory2(){
        $cate2 = Product::where('category_id', '=', 2)->take(4)->get();
        $category = ServiceCategory::all();
        return json_encode($cate2);
    }
    function getAllCategory21(){
        $cate21 = Product::where('category_id', '=', 2)->take(8)->get();
        $category = ServiceCategory::all();
        return json_encode($cate21);
    }
    function getAllCategory3(){
        $cate3 = Product::where('category_id', '=', 3)->take(4)->get();
        $category = ServiceCategory::all();
        return json_encode($cate3);
    }
    function getAllCategory31(){
        $cate31 = Product::where('category_id', '=', 3)->take(8)->get();
        $category = ServiceCategory::all();
        return json_encode($cate31);
    }
    function getAllCategory4(){
        $cate4 = Product::where('category_id', '=', 4)->take(4)->get();
        $category = ServiceCategory::all();
        return json_encode($cate4);
    }
    function getAllCategory41(){
        $cate41 = Product::where('category_id', '=', 4)->take(8)->get();
        $category = ServiceCategory::all();
        return json_encode($cate41);
    }
    function getAllCategory5(){
        $cate5 = Product::where('category_id', '=', 5)->take(4)->get();
        $category = ServiceCategory::all();
        return json_encode($cate5);
    }
    function getAllCategory51(){
        $cate5 = Product::where('category_id', '=', 5)->get();
        $category = ServiceCategory::all();
        return json_encode($cate5);
    }
    
}