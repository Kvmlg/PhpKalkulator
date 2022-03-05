<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<style>
		body{
			background-color:#181818;
			color:while;
		}

		label{
			color:white;
		}

		h1{
			color:white;
		}

		input[type=text]{
			border: 3px solid #555;
  			padding: 8px 3px;
			margin: 20px 20;
			width: 240px;
			background-color:#181818 ;
		}

		select{
			border: 3px solid #555;
  			padding: 8px 3px;
			margin: 20px 20;
			width: 250px;
			text-align:center;
			background-color:#181818;
			color:white;
		}

		input[type=submit]{
			background-color:#FF8C00;
  			padding: 8px 3px;
			margin: 20px 20;
			width: 120px;
		}
	</style>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
<div class="Kalk" style="position: absolute; top:20%; left:40%;">
<h1><center>Kalkulator ratalny</center></h1>
<table style="border-spacing: 10px;">
	<tr>
		<td><label for="id_x">Podaj kwotę kredytu: </label></td>
		<td><input id="id_x" type="text" name="x" value="<?php if(isset($x)) print($x); ?>" /></td>
	</tr>
	<tr>
		<td><label for="id_op">Okres spłaty: </label></td>
		<td><select name="op">
			<option value="1">Rok</option>
			<option value="2">Dwa lata</option>
			<option value="3">Trzy lata</option>
			<option value="4">Cztery lata</option>
			<option value="5">Pięć lat</option>
			<option value="6">Sześć lat</option>
			<option value="7">Siedem lat</option>
			<option value="8">Osiem lat</option>
			<option value="9">Dziewięć lat</option>
			<option value="10">Dziesięć lat</option>
		</select></td>
	</tr>
	<tr>
		<td><label for="id_y">Wprowadź oprocentowanie: </label></td>
		<td><input id="id_y" type="text" name="y" placeholder="podaj wartość bez znaku '%'" value="<?php if(isset($x)) print($y); ?>" /><br /></td>
	</tr>
</table>
	<br><center><input type="submit" value="Oblicz" /></center>
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<div style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; text-align:center; color:white;">';
		foreach ( $messages as $key => $msg ) {
			echo $msg.'<br>';
		}
		echo '</div>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; text-align:center; color:white;">
<?php echo 'Miesięczna rata kredytu to: '.$result; ?>
</div>
<?php } ?>

</body>
</html>