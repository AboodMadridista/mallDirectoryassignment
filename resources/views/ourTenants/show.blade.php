@extends('layouts.app1')

@section('content')
<div class="container">
<style>
body{

}
</style>
{{Form::open(['action'=>['OurTenantsController@show',$tenant->id], 'method'=> 'POST'])}}


<div class="jumbotron jumbotron-fluid">
<div class="col justify-content-md-left">
<table>
  <tr>
      <td>
          <div class="row-sm-3">
            <table>
            <tr><th>Name</th><td>{{$tenant->name}}</td></tr>
            <tr><th>LotNo</th><td>{{$tenant->LotNo}}</td></tr>
            <tr><th>Level</th><td>{{$tenant->Level}}</td></tr>
            <tr><th>Zone</th><td>{{$tenant->Zone}}</td></tr>
            <tr><th>Category</th><td>{{$tenant->Category}}</td></tr>
            </table>
          </div>
      </td>
          <td>
            <div class="row-sm-3">
              <img src= "http://localhost:8000/img/MallFloorPlan.png" alt="TenantPicture")>
            </div>
          </td>
        </tr>
</table>

      </div>
{{Form::close()}}

</div>
@endsection
