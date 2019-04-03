@extends('layouts.app')

@section('content')

{{ Html::style('frontEnd.css')}}


<div class="container">
{{Form::open(['action'=>['TenantsController@destroy',$tenant->id], 'method'=> 'POST'])}}

<table>
  <tr><th>Name</th><td>{{$tenant->name}}</td></tr>
  <tr><th>LotNo</th><td>{{$tenant->LotNo}}</td></tr>
  <tr><th>Level</th><td>{{$tenant->Level}}</td></tr>
  <tr><th>Zone</th><td>{{$tenant->Zone}}</td></tr>
  <tr><th>Category</th><td>{{$tenant->Category}}</td></tr>
  <tr><td><a href='/tenants/{{$tenant->id}}/edit'>Edit</a></td>
      <td>{{Form::hidden('_method','DELETE')}}
          <input type='submit' value='Delete'></td></tr>


          <!-- <a href='/tenants/{{$tenant->id}}/edit'>Edit</a> -->
    {{Form::close()}}

</div>
@endsection
