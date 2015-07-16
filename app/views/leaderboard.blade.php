@extends('dashboard')

@section('css')

.com
{margin-left:-799px;margin-top:420px;position:absolute;}

.com1
{
margin-left:6%;margin-top:-1px;position:absolute;
background-color:#000000;border-color:white;color:white;
}

.com1:active
{

margin-left:6%;margin-top:-139px;position:absolute;
background-color:#ff0000;border-color:white;color:white;
}
.com1:select
{

margin-left:6%;margin-top:-139px;position:absolute;
background-color:#006677;border-color:white;color:white;
}


.btn1{
margin-left:6%;margin-top:420px;position:absolute;
cursor:pointer;
width:100px;
height:30px;text-align:center;
background-color:#0088AA;color:white;
cellSpacing:0px;
border:solid 0px black;
 }

 .new
 {
margin-left:6%;margin-top:520px;position:absolute;cursor:pointer;

 }


#ran:active
{
background-color:red;	
}
#nam:active
{
background-color:red;	
}
td
{
text-align:center;
}

#nam
{
width:280px;
}

#ran
{
width:280px;
background-color:#ff8855;
}
<!-- 
#username
{
width:200px;
height:25px;
}

#username:focus
{
border:3px solid blue;
} -->

#graph1
{
position:absolute;
margin-left:250px;
}
#graph2
{
position:absolute;
margin-left:250px;
}
#sortedbyname
{
position:absolute;
}
@stop

@section('jspart')





 {{HTML::script('assets/js/leaderboard.js')}}
 {{HTML::script('assets/js/bargraph.js')}}






@stop



@section('main')

<canvas id="graphSpace1" width="1000" height="400" ></canvas>

<canvas id="graphSpace2" width="1000" height="400" style="display:none;"></canvas>
<br />
<span id="graph1"> </span>
<br />
<span id="graph2" style="display:none;"> </span>

<br />
 <input type="button" id="ran" class="btn1" onclick="sortbyrank();" style="margin-top:100px;margin-left:-340px;" value="SortByScore">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" id="nam" onclick="sortbyname();" class="btn1" style="margin-top:100px;margin-left:-70px;" value="SortByName">&nbsp;&nbsp;&nbsp;&nbsp;
<br /><br />

<input type="text" class="new" style="margin-top:100px;margin-left:-300px;" name="username" id="username">
<input type="button" value="search" class="btn1"  style="margin-top:100px;margin-left:-70px;" onclick="search()">

<br /><br />
 <div id="search" class="com" style="margin-left:200px;margin-top:100px;font-size:28px;color:#ffcc33;display:block;">
<br />
<table style="font-size:28px;color:#ffcc33;display:block;">
<tr><td><strong>RANK&nbsp;&nbsp;&nbsp;</strong></td>
<td><strong>USERNAME</strong></td>
<td><strong>SCORE</strong></td>
</tr>
<tr><td><br /></td></tr>
<?php 
// echo "<strong>";
// echo "Rank";
//         echo "&nbsp;&nbsp;&nbsp;";
// 		echo "Username";

//         echo "&nbsp;&nbsp;&nbsp;";
// 		echo "Score";
// 		echo "</strong>";
//         echo "<br />";



$j=1;
$chk=0;
{ foreach($users as $user)
	{   
		if($j >10 )
	          break;
        echo "<tr><td>".$user->rank."</td><td>";
        // echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $user->username."</td><td>";

        // echo "&nbsp;&nbsp;&nbsp;";
		echo $user->score."</td></tr>";
		        echo "<tr><td><script type='text/javascript'>promptfunc(".$user->score.")</script></td></tr>";

        // echo "<br />";
        $j++;
      if($user->id == Auth::user()->id)
            $chk=1;

}
}
if($chk==0)
{
echo "<tr><td>".Auth::user()->rank."</td><td>";
        // echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->username."</td><td>";

        // echo "&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->score."</td></tr>";
		// echo "<br />";
}
		?>

		</table>
</div>




<div id='sortedbyname' class="com" style="margin-left:200px;margin-top:100px;font-size:28px;color:#ffcc33;display:none;">
	
	<br />
<table style="font-size:28px;color:#ffcc33;display:block;">
<tr><td><strong>RANK&nbsp;&nbsp;&nbsp;</strong></td>
<td><strong>USERNAME</strong></td>
<td><strong>SCORE</strong></td>
</tr>
<tr><td><br /></td></tr>


<?php 
// echo "<strong>";
// echo "Rank";
//         echo "&nbsp;&nbsp;&nbsp;";
// 		echo "Username";

//         echo "&nbsp;&nbsp;&nbsp;";
// 		echo "Score";
// 		echo "</strong>";
//         echo "<br />";




$i=1;
$check=0;
{ foreach($sortedusers as $user)
	{   
		if($i >10 )
	          break;
        echo "<tr><td>".$user->rank."</td><td>";
        // echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $user->username."</td><td>";

        // echo "&nbsp;&nbsp;&nbsp;";
		echo $user->score."</td></tr>";
        echo "<tr><td><script type='text/javascript'>promptfun(".$user->score.")</script></td></tr>";
        // echo "<br />";
        $j++;
      if($user->id == Auth::user()->id)
            $check=1;
 $i++;

}
}
if($check==0)
{
echo "<tr><td>".Auth::user()->rank."</td><td>";
        // echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->username."</td><td>";

        // echo "&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->score."</td></tr>";
}
		?>




</table>



</div>

<div id="response" class="com" style="margin-left:200px;margin-top:200px;display:none;font-size:28px;color:#ffcc33;">
</div>
<br />
<br /><br />
<br />
<br />
<script type='text/javascript'>
	document.getElementById('leaderboard').style.backgroundColor="#ff3333";

</script>
@stop