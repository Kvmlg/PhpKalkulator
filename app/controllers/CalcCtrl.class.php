<?php

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	public function getParams()
	{
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->operation = getFromRequest('operation');
	}

	public function validate()
	{
		if (!(isset($this->form->x ) && isset($this->form->y) && isset($this->form->operation))) {
			return false;
		}


		if ($this->form->x  == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano wartości oprocentowania');
		}


		if (! getMessages()->isError()) {


			if (!is_numeric($this->form->x )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}

			if (!is_numeric($this->form->y)) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
		}

		return ! getMessages()->isError();
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

		getSmarty()->assign('page_title', 'Kalkulator');
		getSmarty()->assign('page_header', 'Szablony Smarty');


		
		getSmarty()->assign('res', $this->result);
		getSmarty()->assign('form', $this->form);

		// 5. Wywołanie szablonu
		getSmarty()->display('CalcView.html');
	}
}