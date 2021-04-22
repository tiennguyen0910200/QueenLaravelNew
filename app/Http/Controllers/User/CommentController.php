<?php

namespace App\Http\Controllers\User;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use \Firebase\JWT\JWT;

class CommentController extends Controller
 {
    // function index(){
    //     $comment = DB::table('comments')->get();
    //     return json_encode($comment);
    //   }

    function index(){
        $comment = Comment::all();
        return json_encode($comment);
    }
      function getCommentByVendor($id){
        
          $comments = DB::select("select u.name, c.content from users as u, comments as c, vendors as v where v.id = $id and u.id= c.user_id and c.vendor_id = v.id");
  
          // $user_cmt= Users::find($user->user_id);
          // $user->id = $user_cmt->fullname;
           //echo  json_encode($newdetail, JSON_PRETTY_PRINT);
         return json_encode($comments);
    }

    function addComment(Request $request, $id){
      $vendor_id = $id;
      $user_id = $request->user_id;
      $content = $request->content;
      // $key ="tien0910";
      // $data = JWT::decode($user_id, $key, array('HS256'));
      // $user_id = $data->user_id;
    
      return DB::table('comments')->insert([
        'vendor_id'=>$vendor_id,'user_id'=>$user_id,'content'=>$content    
      ]); 
      // $vendor_id.save();
      // $user_id.save();
      // $content.save();    
    }
   
}