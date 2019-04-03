@extends('layouts.app')

@section('content')

{{ Html::style('frontEnd.css')}}



<div class="jumbotron jumbotron-fluid">
<div class="container">

  <div class="col justify-content-md-left">
      <h1 style ="text-align: left;">All tenants</h1>
@if(count($tenants)>0)

<table style="width:100%">
  <thead>
    <tr><th>id</th><th>Name</th><th>LotNo</th><th>Level</th><th>Zone</th><th>Category</th><th colspan="2">Action</th></tr>
  </thead>
  <tbody>
    @foreach($tenants as $tenant)
      <tr><td><a href='tenants/{{$tenant -> id}}'>{{$tenant-> id}}</td>
          <td><a href='tenants/{{$tenant -> id}}'>{{$tenant-> name}}</a></td>
          <td><a href='tenants/{{$tenant -> id}}'>{{$tenant-> LotNo}}</a></td>
          <td><a href='tenants/{{$tenant -> id}}'>{{$tenant-> Level}}</a></td>
          <td><a href='tenants/{{$tenant -> id}}'>{{$tenant-> Zone}}</a></td>
          <td><a href='tenants/{{$tenant -> id}}'>{{$tenant-> Category}}</a></td>

          <td><a href='tenants/{{$tenant -> id}}' class="btn btn-default">Edit</a></td>
          <td>
          {{Form::open(['action'=>['TenantsController@destroy',$tenant->id], 'method'=> 'POST'])}}
{{Form::hidden('_method','DELETE')}}
          <input type='submit' value='Delete' class="btn btn-danger">
          </td>


    {{Form::close()}}

        </tr>
    @endforeach
   </tbody>
</table>
@endif
</div>
</div>
</div>
</html>


@endsection
