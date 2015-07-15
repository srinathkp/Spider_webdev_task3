@extends('dashboard')


@section('css')


#ins
{
list-style:none;
}



.ins:before {
    content: "• ";
    color: white;

margin-left:9%;

}

.ins
{
	font-size:22px;
	color:#ccaa33;
}
@stop



@section('main')

 <div style="margin-left:6%;margin-top:-139px;position:absolute;font-size:28px;color:#ffcc33;">
<ul id="ins">

<strong>Hello {{Auth::user()->fullname}}! Welcome to Quiz Corner,Here are the details regarding the scoring,
<br /><br />
<li class="ins">For each correct answer ,You will be awarded 3 or 2 or 1 point(s) depending on the difficulty of the question.
</li><br />
<li class="ins">If your answer is wrong, You will lose 1 point in case it's a difficult question,2 points if it's moderate,3 if it's an easy one
</li><br />

<li class="ins">
	The choice of difficulty is completely left to the person posting the question so the siteadmin is not responsible 
 for the wrong choice of diff.	
</li><br />


</ul>


</div>

<script type='text/javascript'>
	document.getElementById('instructions').style.backgroundColor="#ff3333";

</script>
@stop