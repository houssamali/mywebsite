<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
       $users= DB::table('users')
       ->join('comments','users.id','=','comments.user_id')
       ->join('likes','users.id','=','likes.user_id')
       ->select('users.name','users.id','comments.user_id','likes.like')
       ->get();
      
        return view('admin.dashboard',compact('users'));
    }
    public function users()
    {
    $users=User::all();
  return view('admin.users',compact('users'));
    }

    public function delete_user(Request $request,$id)
    {
    $users=User::find($id);
    $user->delete();
    return redirect()->back()->with('status','User has been delete');
    }

    public function comments()
    {
    $comments=Comment::all();
  return view('admin.comments',compact('comments'));
    }

    public function likes()
    {
    $likes=Like::all();
  return view('admin.likes',compact('likes'));
    }

    public function show_user(Request $request,$id)
    {
    $user=User::find($id);
  return view('admin.layouts.showuser',compact('user'));
    }

    public function show_comment(Request $request,$id)
    {
    $comment=Comment::where('user_id',$id)->first();
    
    //echo $comment->user_id;

    return view('admin.layouts.show-comment',compact('comment'));
    }

    public function delete_comment(Request $request,$id)
    {
    $comment=Comment::where('user_id',$id)->first();
    
    $comment->delete();

    return redirect()->back()->with('status','comment has been delete');
    }

    public function show_like(Request $request,$id)
    {
    $like=Like::find($id);
    return view('admin.layouts.show-like',compact('like'));
    } 
}
