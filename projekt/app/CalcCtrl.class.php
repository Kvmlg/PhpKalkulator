<?php
//include _ROOT_PATH.'/app/security/check.php';
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $messages;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->messages = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}

	function getParams()
	{
		$this->form->x  = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
		$this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
		$this->form->operation = isset($_REQUEST['operation']) ? $_REQUEST['operation'] : null;
	}

	function validate()
	{
		if (!(isset($this->form->x ) && isset($this->form->y) && isset($this->form->operation))) {
			return false;
		}


		if ($this->form->x  == "") {
			$this->messages->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->y == "") {
			$this->messages->addError('Nie podano wartości oprocentowania');
		}


		if (! $this->messages->isError()) {


			if (!is_numeric($this->form->x )) {
				$this->messages->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}

			if (!is_numeric($this->form->y)) {
				$this->messages->addError('Druga wartość nie jest liczbą całkowitą');
			}
		}

		return ! $this->messages->isError();
	}

	public function process(){

		$this->getparams();
		if ($this->validate()) {

			$this->form->x  = floatval($this->form->x );
			$this->form->y = floatval($this->form->y);

			switch ($this->form->operation) {
				case '1':
					$this->months = 12;
					break;
				case '2':
					$this->months = 24;
					break;
				case '3':
					$this->months = 36;
					break;
				case '4':
					$this->months = 48;
					break;
				case '5':
					$this->months = 60;
					break;
				case '6':
					$this->months = 72;
					break;
				case '7':
					$this->months = 84;
					break;
				case '8':
					$this->months = 96;
					break;
				case '9':
					$this->months = 108;
					break;
				case '10':
					$this->months = 120;
					break;
			}

			$this->result->result = ($this->form->x  + (($this->form->x  * $this->form->y) / 100)) / $this->months;
		}
		$this->generateView();
	}


	public function generateView(){
		global $conf;
		$smarty = new Smarty();

		$smarty->assign('conf',$conf);
		$smarty->assign('page_title', 'Kalkulator');
		$smarty->assign('page_header', 'Szablony Smarty');


		
		$smarty->assign('res', $this->result);
		$smarty->assign('messages', $this->messages);
		$smarty->assign('form', $this->form);

		// 5. Wywołanie szablonu
		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}