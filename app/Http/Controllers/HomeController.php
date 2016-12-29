<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->keyword);
        if ($request->has('keyword')){
            $kontaks = \App\kontak::where('nama','like','%'.$request->keyword.'%')->get();
            return view('cari',compact('kontaks'));
        }
        
       // else{
           // $kontaks = \App\kontak::all();
            

       // }
        $kontaks = \App\kontak::all();
        return view('home',compact('kontaks'));



    }
}
