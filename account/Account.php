<?php
class Client {
	private $id;
	private $name;

	//TODO: implementar getter y setters $id y $name
	public function setId($id) {

	}

	public function setName($name) {
		
	}

	public function getId() {

	}

	public function getName() {
		
	}
}

class Movement {
	public $currency; // Puede ser 'USD' o 'ARS'
	public $amount; // Puede ser un número positivo o negativo

	function Movement($currency, $amount) {
		$this->currency = $currency;
		$this->amount = $amount;
	}
}

class Account {
	private $client;
	private $cvu;
	private $movements;

	//TODO: implementar getCvu
	public function getCvu() {

	}

	//TODO: implementar setClient
	public function setClient($client) {

	}

	//TODO: implementar addMovement
	public function addMovement($movement) {

	}

	//TODO: implementar getBalance
	public function getBalance($currency) {

	}
}