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
cursor:pointer;
border: solid 0px black;
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
 <input type="button" id='one' style="margin-top:-50px;" class="btn1" value="All" onclick="location.href='/myanswers/all';">
<input type="button" id='two' style="margin-top:-50px;margin-left:-3px;" class="btn1" value="General" onclick="location.href='/myanswers/general';">
 <input type="button" id='three'  style="margin-top:-50px;margin-left:-3px;" class="btn1" value="Science" onclick="location.href='/myanswers/science';">
<input type="button" id='four' style="margin-top:-50px;margin-left:-3px;" class="btn1" value="Nature" onclick="location.href='/myanswers/nature';">
<input type="button" id='five' style="margin-top:-50px;margin-left:-3px;" class="btn1" value="Sports" onclick="location.href='/myanswers/sports';">
<br /><br />
<span style="color:green;font-size:24px;">
{{Auth::user()->qid_answered}}
<?php      	DB::table('users')->where('id',Auth::user()->id)->update(array('qid_answered'=>' '));
 ?>
 </span>

<?php 
 echo "<script type='text/javascript'>";
echo "document.getElementById('myanswers').style.backgroundColor='#ff3333';";

if($_SERVER['REQUEST_URI']=="/myanswers/all")
echo "document.getElementById('one').style.backgroundColor='#ff8855';</script>";
      
else if($_SERVER['REQUEST_URI']=="/myanswers/general")
echo "document.getElementById('two').style.backgroundColor='#ff8855';</script>";
      
else if($_SERVER['REQUEST_URI']=="/myanswers/science")
echo "document.getElementById('three').style.backgroundColor='#ff8855';</script>";
      
else if($_SERVER['REQUEST_URI']=="/myanswers/nature")
echo "document.getElementById('four').style.backgroundColor='#ff8855';</script>";
      
else if($_SERVER['REQUEST_URI']=="/myanswers/sports")
echo "document.getElementById('five').style.backgroundColor='#ff8855';</script>";
      









?>


<br /><br />
<?php 
$sub="ans_sub";
$m=0;
{ foreach($questions as $question)
	{   
		echo "<div class=display id=".$question->qid.">";
		// echo "<form method=post action=".$sub."/".Auth::user()->id."/".$question->qid
		echo "<strong><span style='color:#ffc0ff' >Question : ".$question->question."</span>";
	echo "<br /><br />";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "Rated as <span style='color:red;'>".$question->difficulty."</span></strong>";
		echo "<br />";
	echo "<input type=hidden name=qid value=".$question->qid.">";
	echo "OPT A : &nbsp;&nbsp;&nbsp;".$question->opta;
	echo "<br />";
		echo "OPT B : &nbsp;&nbsp;&nbsp;".$question->optb;
	echo "<br />";
		echo "OPT C : &nbsp;&nbsp;&nbsp;".$question->optc;
	echo "<br />";
		echo "OPT D : &nbsp;&nbsp;&nbsp;".$question->optd;
		echo "<br /><br />";
		echo "<span style='color:#00ffff;' > ANSWER : ".$question->answer."</span>";
     echo "<br />";
           $uans=DB::table('filter')->where('uid',Auth::user()->id)->where('qid',$question->qid)->pluck('uanswer');
           $pts=DB::table('filter')->where('uid',Auth::user()->id)->where('qid',$question->qid)->pluck('points');

         echo "<span style='color:#00ffff;' >YOUR ANSWER : ".$uans."</span>";
         echo "<br />";
		         echo "<span style='color:#00ffff;' >Your got ".$pts." points for this question..! </span>";

		    echo "<br />";
		    echo "<br />";
		    echo "<br />";

		echo "</div>";$m++;
}
if($m==0)
	echo "No Results found";
}
?>

</div>
@stop