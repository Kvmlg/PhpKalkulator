<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	
	<style>
		body{
			background-color:#c8c8c8;
			color:black;
		}

		label{
			color:black;
		}

		h1{
			color:black;
		}

		input[type=text] {
  			padding: 8px 3px;
			margin: 20px 20;		
			width:100%;
			color:white;
			display:block;
			border:none;
			padding:15px 20px;
			border-radius:25px;
			background:#6a6f8c;			
		}

		select{
			padding: 8px 3px;
			margin: 20px 20;
			width:120%;
			color:#fff;
			display:block;
			border:none;
			padding:15px 20px;
			border-radius:25px;
			background:#6a6f8c;	
			text-align:center;
		}

		input[type=submit]{
			background-color:#FF8C00;
  			padding: 8px 3px;
			margin: 20px 20;
			width: 120px;
		}

		::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  		color: white;
  		opacity: 1; /* Firefox */
}
	</style>
<meta charset="utf-8" />
<title>{$page_title|default:"Tytuł domyślny"}</title>
</head>
<body>

<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active" style=":position: absolute; right: 0px; color:Orange;">Wyloguj</a>
</div>

<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
<div class="Kalk" style="position: absolute; top:20%; left:40%;">
{block name=content} Domyślna treść zawartości .... {/block}

</body>
</html>