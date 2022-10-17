<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
//use SerializesModels;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $rules=[
            'comment_ar'=>'required|min:20|max:50',
            'comment_en'=>'required|min:20|max:50',
        ];
        $validate=Validator::make($request->all(),$rules,[
        'comment_ar.required'=>'هذا الحقل مطلوب',
        'comment_ar.min'=>'يجب ألا يقل الحد الأدنى من الأحرف عن 20',
        'comment_ar.max'=>'يجب ألا يزيد عدد الأحرف عن 50',
        'comment_en.required'=>'This field is required',
        'comment_en.min'=>' charaters should not be less than 20',
        'comment_en.max'=>' charaters should not be more than 50',
        ]);
        if($validate->fails())
        {
       return redirect()->back()->withErrors($validate)->withInputs($request->all());
    }
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
