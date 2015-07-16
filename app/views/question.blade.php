@extends('dashboard')

@section('css')
.display
{
background-color:#343434;

}

.btn1{
width:150px;
height:40px;text-align:center;
background-color:#0088AA;color:white;
cellSpacing:0;
cellPadding:0;
border: solid 0px black;
cursor:pointer;
}
.btn
{
width:100px;
color:maroon;

}
@stop

@section('jspart')

@stop


@section('main')



 <div style="margin-left:10%;margin-top:-234px;width:800px;position:absolute;">
 <input type="button" id='one' style="margin-top:-50px;" class="btn1" value="All" onclick="location.href='/questions/all';">
<input type="button" id='two' style="margin-top:-50px;margin-left:-3px;" class="btn1" value="General" onclick="location.href='/questions/general';">
 <input type="button" id='three'  style="margin-top:-50px;margin-left:-3px;" class="btn1" value="Science" onclick="location.href='/questions/science';">
<input type="button" id='four' style="margin-top:-50px;margin-left:-3px;" class="btn1" value="Nature" onclick="location.href='/questions/nature';">
<input type="button" id='five' style="margin-top:-50px;margin-left:-3px;" class="btn1" value="Sports" onclick="location.href='/questions/sports';">
<br />
 <input type="button" id='six' style="margin-top:10px;margin-left:150px;" class="btn1" value="Easy" onclick="location.href='/questions/easy';">
<input type="button" id='seven' style="margin-left:-3px;" class="btn1" value="Moderate" onclick="location.href='/questions/moderate';">
<input type="button" id='eight' style="margin-left:-4px;" class="btn1" value="Difficult" onclick="location.href='/questions/difficult';">
<br /><br />
<span style="color:green;font-size:24px;">
{{Auth::user()->qid_answered}}
<?php      	DB::table('users')->where('id',Auth::user()->id)->update(array('qid_answered'=>' '));
 ?>
 </span>

<?php 
 echo "<script type='text/javascript'>";
echo "document.getElementById('questions').style.backgroundColor='#ff3333';";

if($_SERVER['REQUEST_URI']=="/questions/all")
echo "document.getElementById('one').style.backgroundColor='#ff8855';</script>";
      
else if($_SERVER['REQUEST_URI']=="/questions/general")
echo "document.getElementById('two').style.backgroundColor='#ff8855';</script>";
      
else if($_SERVER['REQUEST_URI']=="/questions/science")
echo "document.getElementById('three').style.backgroundColor='#ff8855';</script>";
      
else if($_SERVER['REQUEST_URI']=="/questions/nature")
echo "document.getElementById('four').style.backgroundColor='#ff8855';</script>";
      
else if($_SERVER['REQUEST_URI']=="/questions/sports")
echo "document.getElementById('five').style.backgroundColor='#ff8855';</script>";

else if($_SERVER['REQUEST_URI']=="/questions/easy")
echo "document.getElementById('six').style.backgroundColor='#ff8855';</script>";

else if($_SERVER['REQUEST_URI']=="/questions/moderate")
echo "document.getElementById('seven').style.backgroundColor='#ff8855';</script>";

else if($_SERVER['REQUEST_URI']=="/questions/difficult")
echo "document.getElementById('eight').style.backgroundColor='#ff8855';</script>";









?>


<br /><br />
<?php 
$sub="ans_sub";
$n=0;
{ foreach($questions as $question)
	{   
		echo "<div class=display id=".$question->qid.">";
		// echo "<form method=post action=".$sub."/".Auth::user()->id."/".$question->qid
        echo "<form method=post action".$_SERVER["PHP_SELF"].">";
		echo "<strong>".$question->question;
	echo "<br /><br />";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Rated as <span style='color:red;'>".$question->difficulty."</span></strong>";
		echo "<br /><br />";
	echo "<input type=hidden name=qid value=".$question->qid.">";
	echo "<input type=radio name=answer required value='a'>&nbsp;&nbsp;".$question->opta;
	echo "<br />";
		echo "<input type=radio name=answer value='b'>&nbsp;&nbsp;".$question->optb;
	echo "<br />";
		echo "<input type=radio name=answer value='c'>&nbsp;&nbsp;".$question->optc;
	echo "<br />";
		echo "<input type=radio name=answer value='d'>&nbsp;&nbsp;".$question->optd;
		echo "<br /><br />";
		echo "<input type=submit class=btn1>";

		echo "</form>";
		    echo "<br />";

		echo "</div>";$n++;
}
if($n==0)
{
	echo "<span style='color:#aa7755;font-weight:bolder;margin-left:250px;font-size:24px;'>No New Questions found...!</span>";
}
}
?>

</div>
@stop