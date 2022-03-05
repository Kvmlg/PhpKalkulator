<?php
require_once dirname(__FILE__).'/../config.php';


$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$operation = $_REQUEST ['op'];


if ( ! (isset($x) && isset($y) && isset($operation))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}


if ( $x == "") {
	$messages [] = 'Nie podano kwoty kredytu';
}
if ( $y == "") {
	$messages [] = 'Nie podano wartości oprocentowania';
}


if (empty( $messages )) {
	

	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

}


if (empty ( $messages )) { 
	
	$x = intval($x);
	$y = intval($y);
	
	switch ($operation) {
		case '1' :
			$months=12;
			break;
		case '2' :
			$months=24;
			break;
		case '3' :
			$months=36;
			break;
		case '4' :
			$months=48;
			break;
		case '5' :
			$months=60;
			break;
		case '6' :
			$months=72;
			break;	
		case '7' :
			$months=84;
			break;
		case '8' :
			$months=96;
			break;
		case '9' :
			$months=108;
			break;	
		case '10' :
			$months=120;
			break;		
	}

	$result = ($x+(($x*$y)/100))/$months;

}

include 'calc_view.php';