@extends('base')

@section('body')

{{ Form::open() }}

Full Name : 

<input type="text" id="fullname" required onkeypress="return isAlphakey(event)">
User Name : 

<input type="text" name="username" id="username" required onkeypress="ajaxFunction()" 
onkeyup="ajaxFunction()" > <div id="response"></div>


{{Form::close()}}

@stop