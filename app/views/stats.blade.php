@extends('dashboard')


@section('css')


@stop



@section('main')

 <div style="margin-left:360px;margin-top:-139px;position:absolute;font-size:28px;color:#ffcc33;">
<img src="<?php if(!empty(Auth::user()->prof_pic))echo '/assets/'.Auth::user()->prof_pic;else echo '/assets/default.png'; ?>" width="250px" height="250px" style="border-radius:250px;">
<br />
<span style="margin-left:65px;">{{strtoupper(Auth::user()->username)}}</span>
<br />
<br />
<?php 
if($answered != 0)
{
$successrate=round($correct*100/$answered,2)."%";
}
else
{
	$successrate="-";
}

echo "Questions Posted : ".$posted;echo "<br />";
      echo "Questions Answered : ".$answered;echo "<br />";
      echo " Correct Answers : ".$correct;echo "<br />";
      echo "Wrong Answers : ".($answered-$correct);echo "<br />";
      echo "Success Rate : ".$successrate;echo "<br />";
       ?>


</div>

<script type='text/javascript'>
	document.getElementById('stats').style.backgroundColor="#ff3333";

</script>
@stop