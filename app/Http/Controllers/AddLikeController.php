<?php

namespace App\Http\Controllers;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;

class AddLikeController extends Controller
{
    public function addlike(Request $request)
    {
        if(Auth::check())
        {
        $like=new Like();
        $exist_like=Like::where('user_id',auth()->user()->id)->first();
        if($exist_like ==true)
        {
            $like=Like::where('user_id',auth()->user()->id)->first();
            $like->like=1;
            $like->update(); 
            return redirect()->back(); 
        }else{
        
        $like->user_id=Auth::id();
        $like->like=$request->like;
        $like->save();
        return redirect()->back(); 
        }
}else{
    return redirect('/login');
}
}


    public function removelike()
    {
      $like=Like::where('user_id',auth()->user()->id)->first();
      $like->like=0;
      $like->update(); 
      return redirect()->back(); 
    }
}
