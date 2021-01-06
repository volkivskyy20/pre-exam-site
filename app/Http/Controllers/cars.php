<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class cars extends Controller
{
    function show()
    {
      $data=Car::all();
       return view('main',['carss'=>$data]);
    }
}
