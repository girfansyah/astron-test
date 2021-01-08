<?php

namespace App\Http\Controllers;


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

    public function homeTypeA(){
      return view('pages.home-a');
    }

    public function homeTypeB(){
      return view('pages.home-b');
    }

    public function homeTypeC(){
      return view('pages.home-c');
    }
}
