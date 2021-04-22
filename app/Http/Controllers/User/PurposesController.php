<?php

namespace App\Http\Controllers\User;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\Purpose;
use Illuminate\Support\Facades\DB;

class PurposesController extends Controller
{
    function index(){
        $purpose = DB::table('purposes')
          ->take(4)
          ->orderBy('purposes.created_at', 'desc')
          ->get();
          return response()->json($purpose);

        
    }
}
