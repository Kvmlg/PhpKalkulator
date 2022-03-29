<?php
require_once dirname(__FILE__) . '/../config.php';
//include _ROOT_PATH.'/app/security/check.php';
require_once _ROOT_PATH . '/lib/smarty/Smarty.class.php';

function getParams(&$form)
{
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$form['operation'] = isset($_REQUEST['operation']) ? $_REQUEST['operation'] : null;
}

function validate(&$form)
{
	if (!(isset($form['x']) && isset($form['y']) && isset($form['operation']))) {
		return false;
	}


	if ($form['x'] == "") {
		$messages[] = 'Nie podano kwoty kredytu';
	}
	if ($form['y'] == "") {
		$messages[] = 'Nie podano wartości oprocentowania';
	}


	if (empty($messages)) {


		if (!is_numeric($form['x'])) {
			$messages[] = 'Pierwsza wartość nie jest liczbą całkowitą';
		}

		if (!is_numeric($form['y'])) {
			$messages[] = 'Druga wartość nie jest liczbą całkowitą';
		}
	}

	if (count($messages)>0) return false;
	else return true;
}

function process(&$form, &$messages, &$result){


	$form['x'] = floatval($form['x']);
	$form['y'] = floatval($form['y']);

	switch ($form['operation']) {
		case '1':
			$months = 12;
			break;
		case '2':
			$months = 24;
			break;
		case '3':
			$months = 36;
			break;
		case '4':
			$months = 48;
			break;
		case '5':
			$months = 60;
			break;
		case '6':
			$months = 72;
			break;
		case '7':
			$months = 84;
			break;
		case '8':
			$months = 96;
			break;
		case '9':
			$months = 108;
			break;
		case '10':
			$months = 120;
			break;
	}

	$result = 12;

}
$form = array();
$messages = array();
$result = null;

getParams($form);
if (validate($form)) { // gdy brak błędów
	process($form, $messages, $result);
}


$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Kalkulator');
$smarty->assign('page_description', 'Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header', 'Szablony Smarty');


//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('form', $form);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH . '/app/calc.html');
