<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    // function user_register(Request $req){
    //     $user = new User;

    //     $user->name  = $req->input('name');
    //     $user->email = $req->input('email');
    //     $user->phone = $req->input('phone');
    //     $user->address = $req->input('address');
    //     $user->password = Hash::make($req->input('password'));

    //     $user->save();

    //     return response()->json(200); 
    // }

    // function vendor_register(Request $req){

    //     $user = new User;

    //     $user->name  = $req->input('name');
    //     $user->email = $req->input('email');
    //     $user->phone = $req->input('phone');
    //     $user->address = $req->input('address');
    //     $user->password = Hash::make($req->input('password'));

    //     $user->save();

    //     return response()->json(200); 
    // }

    function login(Request $req){

        $user = User::where('email', $req->email)->first();

        // if(!$user || !Hash::check($req->password, $user->password)){
        //     return response([
        //         'error'=>["Email or Password is not matched"]
        //     ]);
        // }

        return $user;
    }
}
