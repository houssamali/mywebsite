<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function check()
    {
        if(Auth::check())
        {
        $role_as=auth()->user()->role_as;
        if($role_as==1)
        {
            
            return redirect('home');
        }elseif($role_as==0)
        {
            
            return redirect('index');
        
    }
        }
    
    }
}
