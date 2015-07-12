@extends('dashboard')

@section('css')
.display
{
background-color:red;

}
@stop

@section('main')
 <div style="margin-left:30%;margin-top:-53px;position:absolute;">
{{Auth::user()->qid_answered}}
<?php      	DB::table('users')->where('id',Auth::user()->id)->update(array('qid_answered'=>' '));
 ?>

<?php 
$sub="ans_sub";
{ foreach($questions as $question)
	{   
		echo "<div class=display id=".$question->qid.">";
		// echo "<form method=post action=".$sub."/".Auth::user()->id."/".$question->qid
        echo "<form method=post action".$_SERVER["PHP_SELF"].">";
		echo $question->question;
	echo "<br />";
	echo "<input type=hidden name=qid value=".$question->qid.">";
	echo "<input type=radio name=answer value='a'>".$question->opta;
	echo "<br />";
		echo "<input type=radio name=answer value='b'>".$question->optb;
	echo "<br />";
		echo "<input type=radio name=answer value='c'>".$question->optc;
	echo "<br />";
		echo "<input type=radio name=answer value='d'>".$question->optd;
		echo "<br />";
		echo "<input type=submit >";

		echo "</form>";
		echo "</div>";
    echo "<br />";
}
}
?>

</div>
@stop