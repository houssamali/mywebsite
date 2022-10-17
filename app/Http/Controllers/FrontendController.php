<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function showPage()
    {
        $likes=Like::where('like',1)->count();
       // $likes=$like->count();
        $dislikes=Like::where('like',0)->count();
        $locale=app()->getLocale();
        $comments=Comment::select('id','comment_'.$locale,'name','email')->get();
        return view('index',compact('comments','likes','dislikes'));
    }
}
