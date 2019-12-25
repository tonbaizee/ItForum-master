<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        return view('home');
    }
    public function loginConfirm()
    {
        $textMessage = "You Are logined!";
        return view('loginSucces')->with('textMessage', $textMessage);
    }
    public function contact()
    {
        return view('contact');
    }
    public function news()
    {
        $news = DB::table('news')->get();
        return view('news')->with('news',$news);
    }
}
