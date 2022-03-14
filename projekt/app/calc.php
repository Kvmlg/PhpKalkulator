<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x,&$y,&$operation){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$operation = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	
}

function validate(&$x,&$y,&$operation,&$messages){
	if ( ! (isset($x) && isset($y) && isset($operation))) {
		return false;
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

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$x,&$y,&$operation,&$messages,&$result){
	global $role;
	
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
$x = null;
$y = null;
$operation = null;
$result = null;
$messages = array();

getParams($x,$y,$operation);
if ( validate($x,$y,$operation,$messages) ) { // gdy brak błędów
	process($x,$y,$operation,$messages,$result);
}

include 'calc_view.php';