@extends('dashboard')

@section('css')

.com
{margin-left:6%;margin-top:-139px;position:absolute;}

.com1
{
margin-left:6%;margin-top:-139px;position:absolute;
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
margin-left:6%;margin-top:-139px;position:absolute;

width:100px;
height:30px;text-align:center;
background-color:#0088AA;color:white;
cellSpacing:0;
cellPadding:0;
border: solid 0px black;
}
@stop

@section('jspart')





 {{HTML::script('assets/js/leaderboard.js')}}






@stop



@section('main')

<input type="text" class="com" name="username" id="username">
<input type="button" value="search" class="btn1"  style="margin-left:18%" onclick="search()">

<br />
<br />
 <input type="button" class="btn1" onclick="sortbyrank();" style="margin-left:6%;" value="SortByScore">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="button" onclick="sortbyname();" class="btn1" style="margin-left:13%;" value="SortByName">&nbsp;&nbsp;&nbsp;&nbsp;
<br /><br />
 <div id="search" class="com" style="font-size:28px;color:#ffcc33;display:none">


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
        echo $user->rank;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $user->username;

        echo "&nbsp;&nbsp;&nbsp;";
		echo $user->score;
        echo "<br />";
        $j++;
      if($user->id == Auth::user()->id)
            $chk=1;

}
}
if($chk==0)
{
echo Auth::user()->rank;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->username;

        echo "&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->score;
		echo "<br />";
}
		?>
</div>




<div id='sortedbyname' class="com" style="font-size:28px;color:#ffcc33;display:block;">
	

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
        echo $user->rank;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $user->username;

        echo "&nbsp;&nbsp;&nbsp;";
		echo $user->score;
        echo "<br />";
        if($user->id == Auth::user()->id)
        	$check=1;
         $i++;

}
}
if($check==0)
{
echo Auth::user()->rank;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->username;

        echo "&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->score;
		echo "<br />";
}
		?>








</div>

<div id="response" class="com" style="display:none;font-size:28px;color:#ffcc33;">
</div>


<script type='text/javascript'>
	document.getElementById('leaderboard').style.backgroundColor="#ff3333";

</script>
@stop