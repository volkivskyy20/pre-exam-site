<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class brand extends Controller
{
  public function bra()
  {
      $man = Car::select('id','brand','model','year')
                      ->orderBy("brand")
                      ->get();


      // dd($man);
      return view('model',['bran'=>$man]);
  }
}
