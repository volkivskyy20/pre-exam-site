<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class year extends Controller
{
  public function bra()
  {
      $man = Car::select('id','brand','model','year')
                      ->orderBy("year")
                      ->get();


      // dd($man);
      return view('year',['bran'=>$man]);
  }
}
