<?php

declare(strict_types=1);
/**
 * 
 */
class produto
{
	
	private $conexao;

	function __construct()
	{
		try{
	$this->conexao = new PDO('mysql:host=localhost;dbname=_banco','root','');
		}  catch(Expection $e){
		echo $e->getMessage();
		die();
		}

	}


	public function list(): array
	{
		$sql="select * from produtos";	
		$produtos=[]; //array vazio
		foreach ($this->conexao->query($sql) as $key => $value) {
			array_push($produtos, $value);
			}
		return $produtos;
	}



	public function insert( string $descricao) 
	{
		
		$sql='insert into produtos(nome) values(?)';
		$prepare = $this->conexao->prepare($sql);
		$prepare->bindParam(1,$descricao);
		$prepare->execute();
		if ($prepare->rowCount()>0){
   			echo 'Realizado com sucesso';
		} else {
   			echo 'Erro: nada foi alterado';
		}
	}


public function update( string $descricao, int $id) 
	{
		$sql='update produtos set nome=? where id=?';
		$prepare = $this->conexao->prepare($sql);
		$prepare->bindParam(1,$descricao);
		$prepare->bindParam(2,$id);
		$prepare->execute();
		if ($prepare->rowCount()>0){
   			echo 'Realizado com sucesso';
		} else {
   			echo 'Erro: nada foi alterado';
		}
	}



public function delete(int $id) 
	{	
		$sql='delete from produtos where id=? ';
		$prepare = $this->conexao->prepare($sql);
		$prepare->bindParam(1,$id);
		$prepare->execute();
		if ($prepare->rowCount()>0){
   			echo 'Realizado com sucesso';
		} else {
   			echo 'Erro: nada foi alterado';
		}
	}

}


