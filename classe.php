<?php

declare(strict_types=1);

class ContaBancaria{

	Private $banco;
	Private $nomeTitular;
	Private $numeroAgencia;
	Private $numeroConta;
	Private $saldo;


	/*METODO _construct()*/
	public function __construct(string $banco,string $nomeTitular,string $numeroAgencia,string $numeroConta, float $saldo){

	$this->banco         = $banco;
	$this->nomeTitular   = $nomeTitular;
	$this->numeroAgencia = $numeroAgencia;
	$this->numeroConta   = $numeroConta;
	$this->saldo         = $saldo;

	}

	/*METODO obterSaldo()*/
	public function obterSaldo(){
		return "Saldo atual da conta é R$ ".$this->saldo."<br>";
		//return "Número conta é ".$this->numeroConta;
	}

	/*METODO depositar()*/
	public function depositar($valor){
		$this->saldo += $valor;
		return 'Deposito de R$ '. $valor."<br>";
	}


	/*METODO sacar()*/
	public function sacar($valor){
	 $this->saldo -= $valor;
	 return "Saque de R$ ".$valor."<br>" ;
	}


} // fim classe

$conta = new ContaBancaria('Banco Brasil','Gustavo Fraga','4175','54038',600);
//var_dump($conta);


echo $conta->obterSaldo(); // retornar 600,00

$conta->depositar(2300.00);
echo PHP_EOL;

echo $conta->obterSaldo(); // retornar 600,00
echo PHP_EOL;

echo $conta->sacar(300.00); // retornar 600,00
echo PHP_EOL;

echo $conta->obterSaldo(); // retornar 600,00
echo PHP_EOL;

?>