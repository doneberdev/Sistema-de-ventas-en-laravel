<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operation;
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
    public function index()
    {
        $ordenes = Operation::where('type','order')->paginate(10);
        return view('home')->with(compact('ordenes'));
    }
}
