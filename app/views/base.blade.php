


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
	height:50px;background-color:#006677;
	text-align: center;color: white;
}

</style>	


@yield('csspart')
@yield('jspart')
<title>{{$title or "Inno Quizmaster"}}</title>

</head>

<body id="main">
<div id="navbar">
	
	<h2 style="color:white;">{{$head or 'Inno QuizMaster'}}</h2>
@yield('navbar')
</div>

@yield('body')
</body>

</html>




