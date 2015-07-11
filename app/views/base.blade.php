


<html>

<head>
<style>
body
{
	background-color: #343434;
    color:white;
    


}


#navbar
{
	height:100px;background-color:#005555;margin-top:-20px;width:100%;
	text-align: center;color: white;vertical-align: middle;
}

</style>	

@yield('csspart')
@yield('jspart')
<title>{{$title or "Inno Quizmaster"}}</title>

</head>

<body id="main">
<div id="navbar">
	
	<h2 style="color:white;"><br />{{$head or 'Inno QuizMaster'}}</h2>
	</div>
	<div id="sidebar">
@yield('navbar')
</div>

@yield('body')
</body>

</html>




