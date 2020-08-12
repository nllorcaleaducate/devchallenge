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

	//TODO: implementar getCvu > obtiene el CVU de la cuenta
	public function getCvu() {

	}

	//TODO: implementar setClient > Asigna el cliente de la cuenta
	public function setClient($client) {

	}

	//TODO: implementar addMovement > permite agregar un movimiento a la cuenta
	public function addMovement($movement) {

	}

	//TODO: implementar getBalance > permite obtener el saldo de la cuenta en ARS o USD
	public function getBalance($currency) {

	}
}