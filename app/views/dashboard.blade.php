@extends('base')

@section('csspart')
<style>
/*#quest
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
{/*
width:100px;
height:50px;*/
/*background-color:black;
color:white;
margin-left:90%;
margin-top:-50px;
font-weight:bold;}
*/
.sidebar
{ 
	margin-top: -53px;
   margin-left: -45px;
   text-align: center;
   list-style: none;
   width:15%;
   min-width: 200px;
  font-size: 32px;
position:relative;
}
.type
{
   background-color: #003333;
   cursor: pointer;
   border:1px solid #007777;
   height:50px;

}
.type:hover
{
   background-color: #00CCCC;
   border:1px solid #003333;
}
.content
{
margin-top: 300px;
position: relative;

}
.type:active
{
   background-color: black;
}
@yield('css')

</style>
@stop



@section('navbar')
<!-- <a href='questions/all' style="color:white;font-style:height:50px;width:100px;font-size:22px;"><ul><li>
Questions </li></ul>
</a>
<a href="answers/{{Auth::user()->id}}" style="color:white;font-style:height:50px;width:100px;font-size:22px;">
<ul><li>Your Answers </li></ul>
</a>
<a href='logout' style="color:white;height:50px;width:100px;font-size:22px;
margin-left:90%;
margin-top:-50px;">
<ul><li>Logout </li></ul>
</a>

 -->
 <table>
 <tr><td>
 <div style="color:black;font-size:35px;text-align:center;height:100px;width:210px;background-color:#decded;"id="score">
 Your Score : <br />{{Auth::user()->score." points!!"}}
 </div>
      		      <br /><br /><br />
                <ul class="sidebar">
                <li class="type" onclick="location.href='/questions/all';">Questions</li>
                <li class="type" onclick="location.href='/answers/{{Auth::user()->id}}';">My Answers</li>
                <li class="type" onclick="location.href='/instructions';">Instructions</li>
                <li class="type" onclick="location.href='/questions/create';">Post a question</li>
                <li class="type" onclick="location.href='/logout';">logout</li>
                </ul>
</td>

@stop


@section('body')

<!-- <img src="{{'assets/'.Auth::user()->prof_pic}}">
 -->
<!--  $user=new User;

{{'SELECT * FROM users WHERE id NOT IN (SELECT qid FROM users WHERE username=Auth::user()->id)'}}
 -->
 <td>
 @yield('main')
 </td></tr></table>
@stop
