<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //$minas=Mina::orderBy('id','DESC')->paginate(2);
        //$request->user()->autorizeRoles(['user','admin']);

        return view('home');
    }
}
