<?php
use App\Common;
 ?>

@extends('layouts.app')

@section('content')


{{ Html::style('frontEnd.css')}}


{{Form::open(['action'=>'TenantsController@store', 'method'=> 'POST'])}}
<div class="container">
  <table>
    <tr><th>Name</th><td><input type='text' name='name'></td></tr>
    <tr><th>LotNo</th><td><input type='text' name='LotNo'></td></tr>
    <tr><th>Level</th><td>
      {!! Form::select('Level', Common::$level, null, [
'placeholder' => '- Select Level -',
]) !!}
    </td></tr>
    <tr><th>Zone</th><td>
  {!! Form::select('Zone', Common::$zone, null, [
'placeholder' => '- Select Zone -',
]) !!}

    </td></tr>
    <tr><th>Category</th><td>
  {!! Form::select('Category', Common::$category, null, [
'placeholder' => '- Select Category -',
]) !!}

    </td></tr>
    <tr><th></th><td><input type='submit' value='Create'></td></tr>
  </table>
</div>

{{Form::close()}}

@endsection
