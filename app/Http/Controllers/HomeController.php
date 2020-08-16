<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }
    public function pactices()
    {
        return view('frontend.pactices');
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function service(){
        return view('frontend.service');
    }
    public function about(){
        return view('frontend.about');
    }
    public function ourteam(){
        return view('frontend.ourteam');
    }
    public function client(){
        return view('frontend.client');
    }
}
