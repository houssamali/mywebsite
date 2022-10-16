<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    public function addComment(Request $request)
    {
       //$session_messages=trans(messages.session);
        $exists_comment=Comment::where('user_id',Auth::id())->first();
        if($exists_comment==true)
        {
         $update_comment=Comment::where('user_id',Auth::id())->first();
         $update_comment->comment_ar=$request->comment_ar;
         $update_comment->comment_en=$request->comment_en;
         $update_comment->update();
         return redirect()->back()->with('status','Your Comment Has Been Update Successfully');
        }else{
       $comment=new Comment();
       $comment->user_id=Auth::user()->id;
       $comment->name=Auth::user()->name;
       $comment->email=Auth::user()->email;
       $comment->comment_ar=$request->comment_ar;
       $comment->comment_en=$request->comment_en;
       
      
       $comment->save();
       return redirect()->back()->with('status','Thank you for Your Comment');
       }
    }

    public function show()
    {
        $comments=Comment::take(20)->get();
        return view('index',compact('comments'));
    } 
    
}
