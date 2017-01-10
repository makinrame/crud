<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;

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
        if ($request->has('keyword')) {
            $kontaks = Kontak::where('nama', 'like', '%'.$request->keyword.'%')->paginate(10);
        } else {
            $kontaks = Kontak::paginate(10);
        }

        return view('home', compact('kontaks'));
    }
}
