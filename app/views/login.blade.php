@extends('base')

@section('csspart')
    	{{HTML::style('assets/css/form.css')}}
@stop

@section('body')

{{ Form::open() }}

<table style="margin-top:20%;"><tr><td>
Username :</td><td>
<input type="text" autofocus required class="tbox" name="username" id="username" >

</td><td><br /><br /></td></tr>

<tr><td>
Password :
</td><td>
<input type="password" required class="tbox" name="pswd" id="pswd" >
</td><td><br /><br /><br /></td>

</tr>

<table>
<input type="submit" value="LOG IN" style="width:220px;height:25px;background-color:#117799">
{{Form::close()}}
<div >{{$errorMsg or "Don't have an account.Sign up <a href='/'>here</a>"}}</div>


@stop