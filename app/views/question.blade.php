@extends('dashboard')

@section('css')
.display
{
background-color:red;

}
@stop

@section('main')
<td>
 <div style="margin-left:30%;margin-top:-53px;position:absolute;">
<?php 
{ foreach($questions as $question)
	{
		echo "<div class=display id=".$question->qid.">";
		echo $question->question;
	echo "<br />";
	echo "<input type=radio name=answer value='a'>".$question->opta;
	echo "<br />";
		echo "<input type=radio name=answer value='b'>".$question->optb;
	echo "<br />";
		echo "<input type=radio name=answer value='c'>".$question->optc;
	echo "<br />";
		echo "<input type=radio name=answer value='d'>".$question->optd;
		echo "<br />";
		echo "<input type=button onclick=document.getElementById($question->qid).style.display='none';>";
		echo "</div>";
    echo "<br />";
}
}
?>

</div>
</td></tr></table>
@stop