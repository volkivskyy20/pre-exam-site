<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function mane()
    {
      return view('main');
    }

    public function mod()
    {
      return view('model');
    }
    public function yea()
    {
      return view('year');
    }
    public function man()
    {
      return view('brand');
    }

  

    public function search(Request $request){
      $search = $request->get('search');
      $id= DB::table('cars')
                ->where('brand','like','%'.$search.'%')
                ->orWhere('model','like','%'.$search.'%')
                ->orWhere('year','like','%'.$search.'%')
                ->get();
                return view('search',['data'=>$id]);
    }

}
