@extends('dashboard')

@section('css')
.display
{
background-color:maroon;

}

.btn
{
width:100px;
color:maroon;

}
@stop

@section('main')
 <div style="margin-left:10%;margin-top:-163px;width:800px;position:absolute;">
{{Auth::user()->qid_answered}}
<?php      	DB::table('users')->where('id',Auth::user()->id)->update(array('qid_answered'=>' '));
 ?>
<br /><br />
<?php 
$sub="ans_sub";
{ foreach($questions as $question)
	{   
		echo "<div class=display id=".$question->qid.">";
		// echo "<form method=post action=".$sub."/".Auth::user()->id."/".$question->qid
        echo "<form method=post action".$_SERVER["PHP_SELF"].">";
		echo "<strong>".$question->question;
	echo "<br /><br />";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Rated as ".$question->difficulty."</strong>";
		echo "<br /><br />";
	echo "<input type=hidden name=qid value=".$question->qid.">";
	echo "<input type=radio name=answer value='a'>&nbsp;&nbsp;".$question->opta;
	echo "<br />";
		echo "<input type=radio name=answer value='b'>&nbsp;&nbsp;".$question->optb;
	echo "<br />";
		echo "<input type=radio name=answer value='c'>&nbsp;&nbsp;".$question->optc;
	echo "<br />";
		echo "<input type=radio name=answer value='d'>&nbsp;&nbsp;".$question->optd;
		echo "<br /><br />";
		echo "<input type=submit class=btn>";

		echo "</form>";
		echo "</div>";
    echo "<br />";
}
}
?>

</div>
@stop