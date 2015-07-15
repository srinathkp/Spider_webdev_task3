@extends('dashboard')



@section('css')



.t1
{
	font-size: 22px;
	margin-top: 10%;
}

input:focus
{/*
	background-color: black;
	color:white;*/
	border:solid 3px blue;

	width:450px;
	height:25px;
}
select:focus
{
	border:solid 3px red;
width:250px;
}
.tbox
{
width:240px;
height:25px;
border:  solid 2px #CCCCCC;
}
select
{
	width:140px;
}

option
{
background-color: #343434;
color:white;

}



.com
{margin-left:6%;margin-top:-189px;position:absolute;}

@stop

@section('js')

 {{HTML::script('assets/js/createquiz.js')}}




@stop

@section('main')



 <div id="search" class="com" style="font-size:24px;color:#cacc73;font-weight:bolder;">
 {{ Form::open() }}

<table class="t1">
<tr><td>
Question : 
</td><td>
<textarea rows="5" autofocus cols="50" name="question" id="question" required >
</textarea>
</td><td><br /><br /></td></tr>


<tr><td>
Opt A : 
</td><td>

<input type="text" name="opta" class="tbox" id="opta" required > 

</td>



<td><br /><br /></td></tr>



<tr><td>
Opt B : 
</td><td>

<input type="text" name="optb" class="tbox" id="optb" required > 

</td>



<td><br /><br /></td></tr>



<tr><td>
Opt C : 
</td><td>

<input type="text" name="optc" class="tbox" id="optc" required > 

</td>



<td><br /><br /></td></tr>



<tr><td>
Opt D : 
</td><td>

<input type="text" name="optd" class="tbox" id="optd" required > 

</td>



<td><br /><br /></td></tr>





<tr><td>
Answer : 
</td><td>

<select name="answer" id='answer'>

<option value="a">Opt A</option>

<option value="b">Opt B</option>
<option value="c">Opt C</option>

<option value="d">Opt D</option>

</select>


</td>



<td><br /><br /></td></tr>


<tr><td>
Category : 
</td><td>

<select name="category" id='category'>

<option value="general">General</option>

<option value="sports">Sports</option>
<option value="science">Science</option>

<option value="nature">Nature</option>

</select>


</td>



<td><br /><br /></td></tr>



<tr><td>
Difficulty : 
</td><td>

<select name="difficulty" id='difficulty'>

<option value="easy">Easy</option>

<option value="moderate">Moderate</option>

<option value="difficult">Difficult</option>

</select>


</td>



<td><br /><br /></td></tr>

</table>


<input type="submit" 
style="width:340px;height:30px;text-align:center;
background-color:#0088AA;color:white;" value="submit" onclick="false">





{{Form::close()}}
</div>

<div class="com" style="color:red;font-size:28px;">{{$msg or " "}}</div>


<script type='text/javascript'>
	document.getElementById('createquiz').style.backgroundColor="#ff3333";

</script>
@stop