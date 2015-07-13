@extends('dashboard')

@section('css')

.com
{margin-left:6%;margin-top:-139px;position:absolute;}


@stop

@section('jspart')





 {{HTML::script('assets/js/leaderboard.js')}}






@stop



@section('main')

<input type="text" class="com" name="username" id="username">
<input type="button" value="search" class="com"  style="margin-left:20%" onclick="search()">
<br /><br />
 <div id="search" class="com" style="font-size:28px;color:#ffcc33;">


<?php 
// echo "<strong>";
// echo "Rank";
//         echo "&nbsp;&nbsp;&nbsp;";
// 		echo "Username";

//         echo "&nbsp;&nbsp;&nbsp;";
// 		echo "Score";
// 		echo "</strong>";
//         echo "<br />";





{ foreach($users as $user)
	{   
		if($user->rank >10 )
	          break;
        echo $user->rank;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $user->username;

        echo "&nbsp;&nbsp;&nbsp;";
		echo $user->score;
        echo "<br />";


}
}
echo Auth::user()->rank;
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->username;

        echo "&nbsp;&nbsp;&nbsp;";
		echo Auth::user()->score;
		echo "<br />";

		?>
</div>

<div id='response'></div>


@stop