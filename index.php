<?php
/*Chama a classe Produto()*/
require 'produto.php';
$produto = new Produto();



switch ($_GET['operacao']) {
	

	case 'list':
		
		echo '<h3>Produto</h3>';

		foreach ($produto->list() as $value) {
			echo 'ID:'.$value['id'].'<br> Descrição:'.$value['nome'].'<hr>';
			}

		break;
	
	
	case 'insert':
		$status = $produto->insert('Produto Angelo');
		break;
	
	case 'update':
		$produto->update('Produto alterado Angelo',2);
		break;

	case 'delete':
		$status = $produto->delete(6);
		break;
	
}

