@extends('layouts.app')
@section('content')
<div class="container">

    <div class="colo justify-content-center">
        <div class="col-md-12">
          <h1>Search cars via model/manufacture/year</h1>
          <hr>
          <form action="/search" method="get">
            <div class="input-group">
              <input type="search" name="search" class="form-control">
              <span class='input-group form-broup-btn justify-content-center'>
                <button type="submit"  name="go">Search</button>
              </span>
            </div>  
          
          </form>
          @if(isset($_GET['go']))
          <table  class="table table-hover table-dark">
            <tr>
              <td>ID</td>
              <td>MANUFACTURE</td>
              <td>MODEL</td>
              <td>YEAR</td>
            </tr>
            @foreach($data as $Car)
            <tr>
              <td>{{$Car->id}}</td>
              <td>{{$Car->brand}}</td>
              <td>{{$Car->model}}</td>
              <td>{{$Car->year}}</td>
            </tr>
            @endforeach
          </table>
          @endif
       </div>


      </div>

    </div>


    @endsection
