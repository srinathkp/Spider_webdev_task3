@extends('base')

@section('csspart')
    	{{HTML::style('assets/css/form.css')}}

    	<style >
.btn{
width:150px;
height:40px;text-align:center;
background-color:#0088AA;color:white;
cellSpacing:0;
cellPadding:0;
border: solid 0px black;
}
.btn:focus
{
	width:150px;
}
</style>
@stop

@section('body')

<input type="button" style="margin-top:50px;" class="btn" value="Signup" onclick="location.href='/';">
<input type="button" style="margin-top:50px;margin-left:-4px;background-color:black;" class="btn" value="Login" onclick="location.href='/login';">


{{ Form::open() }}

<table style="margin-top:10%;font-size:24px;"><tr><td>
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
<br /><br />
<div style="color:red;font-size:22px;">{{$errorMsg or " "}}</div><br />
<div>{{"Don't have an account.Sign up <a href='/' style='color:#4444ff;'>here</a>"}}</div>


@stop