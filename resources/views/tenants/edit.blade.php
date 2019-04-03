@extends('layouts.app')

@section('content')



{{ Html::style('frontEnd.css')}}


{{Form::open(['action'=>['TenantsController@update',$tenant->id], 'method'=> 'POST'])}}

<div class="jumbotron jumbotron-fluid">
<div class="container">
<table>
<tr><td>name</td><td><input type='text' name='name' value={{$tenant->name}}>
{{Form::hidden('_method','PUT')}}</td></tr>
<tr><td>LotNo</td><td><input type='text' name='LotNo' value={{$tenant->LotNo}}>
{{Form::hidden('_method','PUT')}}</td></tr>
<tr><td>Level</td><td><input type='text' name='Level' value={{$tenant->Level}}>
{{Form::hidden('_method','PUT')}}</td></tr>
<tr>
  <td><!-- Zone -->
  <div class="form-group row">
  {!! Form::label('tenant-zone', 'Zone', [
  'class' => 'control-label col-sm-3',
  ]) !!}
  <div class="col-sm-9">
  {!! Form::select('zone', Common::$zone, $tenants->zone, [
  'class' => 'form-control',
  'placeholder' => '- Select Zone -',
  ]) !!}
  </div>
  </div></td>
</tr>
<tr><td>Category</td><td><input type='text' name='Category' value={{$tenant->Category}}>
{{Form::hidden('_method','PUT')}}</td></tr>
<tr><td>
<input type='submit' value='Update'>
</td></tr>
</div>
</div>







{{Form::close()}}


@endsection
