<?php

$user = 'frete150_usu';
$password = 'frete#2015';
$db = 'frete150_db';
$host = 'freteconsciente.com.br';


header('Content-Type: text/html; charset=utf-8');
$conn = mysqli_connect($host, $user, $password, $db);

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	

	$hi = $_POST['hi'];
	$hi2 = utf8_decode($hi);

	$hf = $_POST['hf'];
	$hf2 = utf8_decode($hf);

	$di = $_POST['di'];
	$di2 = utf8_decode($di);

	$df = $_POST['df'];
	$df2 = utf8_decode($df);

	$th = $_POST['th'];
	$th2 = utf8_decode($th);

	$nome = $_POST['nome'];
	$nome2 = utf8_decode($nome);

	$COD_MOTORISTA = $_POST['cm'];
	$COD_MOTORISTA2 = utf8_decode($COD_MOTORISTA);

	
	if(!$conn){
		die('Connection Failed');
	}
	else{

		$sql = "INSERT INTO T_MONITORAMENTO (HORA_INICIO, HORA_FINAL, DATA_INICIO, DATA_FINAL, QTDE_HORAS, NOME, COD_MOTORISTA)
		VALUES ('$hi2','$hf2','$di2','$df2','$th2','$nome2','$COD_MOTORISTA2')";

		if (mysqli_query($conn, $sql)) {
	    	echo 'Successfully added.';
			echo $sql;
		} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}		
		// $conn->close();
	}

?>