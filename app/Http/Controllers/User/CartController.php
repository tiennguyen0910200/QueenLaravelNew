<?php

namespace App\Http\Controllers\User;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index(){
        $token = request()->header("Authorization");
		$key ="21Atien";
        $user_id=JWT::decode($token, $key, array('HS256'));//lay id cuar usser dẫ đang nhap 
        $bills=Bill::where("user_id",$user_id)->get();//tim cart  nào của user đó thì lấy ra
        foreach($bills as $bill){
            $bill->products;//lấy  dữ liêu của product dựa vao fuction viet o model
            $bill->user;
        }
        $array = array("bill" => $bills);
		return response()->json($array,200);// lấy được rồi trả về mảng cart dạng json
    }
    function store($id){
        $response=200;
        $token = request()->header("Authorization");
		$key ="21Atien";
        $user_id=JWT::decode($token, $key, array('HS256'));
        $bill=Bill::where("user_id",$user_id)->where("pro_id",$id)->first();
        if($bill){
            $product= Product::where("id",$id)->first();
            if($bill->quantity < $product->quantity){
                $bill->quantity= $cart->quantity+1;
                $bill->save();
            }
            else{
                $response=400;
                $bill->quantity= $bill->quantity;
                $bill->save();
            }
        }
        else{
            $bill = new Cart();
            $bill->user_id=$user_id;
            $bill->pro_id=$id;
            $product= Product::where("id",'=',$id)->first();
            if($product->quantity>=1){
                $bill->quantity=1;
                $bill->save();
            }else{
                $response=400;
            }
        }
        $bills=Bill::where("user_id",$user_id)->get();
        foreach($bills as $bill){
            $bill->products;
            $bill->user;
        }
        $array = array("bill" => $bills);
        return response()->json($array,$response);
        
    }
}
