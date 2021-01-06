@extends('layouts.app')
@section('content')
<div class="container">
    <div class="colo justify-content-center">
      <div class="col-md-12">
        <h1>Cars in stock</h1>
        <hr>
        <table border="1" class="table table-hover table-dark">
          <tr>
            <td>ID</td>
            <td>MANUFACTURE</td>
            <td>MODEL</td>
            <td>YEAR</td>
          </tr>
          @foreach($carss as $Car)
          <tr>
            <td>{{$Car['id']}}</td>
            <td>{{$Car['brand']}}</td>
            <td>{{$Car['model']}}</td>
            <td>{{$Car['year']}}</td>
          </tr>
          @endforeach
        </table>
      </div>

    </div>
</div>







@endsection
