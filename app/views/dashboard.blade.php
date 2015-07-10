@extends('base')

@section('csspart')
<style>
#quest
{
width:100px;
height:50px;
background-color:black;
color:white;
margin-left:70%;
margin-top:-48px;
vertical-align:middle;
font-weight:bold;}


#answer
{
width:100px;
height:50px;
background-color:black;
color:white;
margin-left:80%;
margin-top:-50px;
vertical-align:middle;
font-weight:bold;}

#logout
{
width:100px;
height:50px;
background-color:black;
color:white;
margin-left:90%;
margin-top:-50px;
vertical-align:middle;
font-weight:bold;}

</style>

@stop



@section('navbar')
<a href='questions/all' style="color:white;font-style:height:50px;width:100px;font-size:22px;"><div id="quest">
Questions </div>
</a>
<a href="answers/{{Auth::user()->id}}" style="color:white;font-style:height:50px;width:100px;font-size:22px;"><div id="answer">
Your Answers </div>
</a>
<a href='logout' style="color:white;font-style:height:50px;width:100px;font-size:22px;"><div id="logout">
Logout </div>
</a>
@stop


@section('body')

<!-- <img src="{{'assets/'.Auth::user()->prof_pic}}">
 -->


@stop
