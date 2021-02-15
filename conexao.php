<?php
declare(strict_types=1);


$pdo=null;

try{
	$pdo= new PDO('mysql:host=localhost;dbname=_banco','root','');
}  catch(Expection $e){
	echo $e->getMessage();
	die();
	
}

return $pdo;