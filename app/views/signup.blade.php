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
border:solid 0px black;
}
.btn:focus
{
	width:150px;
}
</style>

@stop

@section('jspart')
       
 {{HTML::script('assets/js/form.js')}}

@stop

@section('body')


<!-- <span style="margin-top:30px;" >Already an user, LOGIN HERE</span> &nbsp;&nbsp;&nbsp;
 --><input type="button" id="btn1" style="margin-top:50px;background-color:black;cursor:pointer;" class="btn" value="Signup" onclick="location.href='/';">
<input type="button" id="btn2" style="margin-top:50px;margin-left:-4px;cursor:pointer;" class="btn" value="Login" onclick="location.href='/login';">


{{ Form::open(array('enctype'=>'multipart/form-data','files'=>true)) }}




<table class="t1">
<tr><td>
Full Name : 
</td><td>
<input type="text" name="fullname" id="fullname" class="tbox" required onkeypress="return isAlphakey(event)">

</td><td><br /><br /></td></tr>
<tr><td>
User Name : 
</td><td>

<input type="text" name="username" class="tbox" id="username" required onkeypress="ajaxFunction()" 
onkeyup="ajaxFunction()" > 

</td><td>

<div id="response"></div>

</td><td><br /><br /></td></tr>

<tr><td>Password (min. 5): </td><td>
<input type="password" id="pswd" required class="tbox" name="pswd" onkeypress="strength();" onkeydown="strength();"
onkeyup="strength();"></td><td>
<div id="strength" ></div>
</td><td><br /><br /></td>
</tr>

<tr><td>Confirm Password : </td><td>
<input type="password" id="pswd2" required class="tbox" name="pswd2" onkeypress="passcheck();" onkeydown="passcheck();"
onkeyup="passcheck();"></td><td>
<div id="error1" ></div>
</td><td><br /><br /></td>
</tr>

<tr>
<td>Profile Pic : </td>
<td> <input type="file" id='profilepic' name="profilepic" placeholder="Your profile pic" />
</td>
<td><br /><br /></td>
</tr>

</table>


<input type="submit" 
style="width:330px;height:40px;text-align:center;
background-color:#0088AA;color:white;cursor:pointer;" value="submit">

	

{{Form::close()}}
{{$msg or "Fill the details"}}
@stop