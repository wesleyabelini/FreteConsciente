<?php

$user = 'frete150_usu';
$password = 'frete#2015';
$db = 'frete150_db';
$host = 'localhost';


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
	$NOME = $_POST['nome'];
	$NOME2 = utf8_decode($NOME);

	$SOBRENOME = $_POST['sobrenome'];
	$SOBRENOME2 = utf8_decode($SOBRENOME);
	
	$EMAIL = $_POST['email'];
	$EMAIL2 = utf8_decode($EMAIL);

	$SENHA = $_POST['senha'];
	$SENHA2 = utf8_decode($SENHA);

	$TELEFONE = $_POST['telefone'];
	$TELEFONE2 = utf8_decode($TELEFONE);

	$ENDERECO = $_POST['endereco'];
	$ENDERECO2 = utf8_decode($ENDERECO);

	$NUMERO = $_POST['numero'];
	$NUMERO2 = utf8_decode($NUMERO);

	$COMPLEMENTO = $_POST['complemento'];
	$COMPLEMENTO2 = utf8_decode($COMPLEMENTO);

	$CIDADE = $_POST['cidade'];
	$CIDADE2 = utf8_decode($CIDADE);

	$ESTADO = $_POST['estado'];
	$ESTADO2 = utf8_decode($ESTADO);

	$CEP = $_POST['cep'];
	$CEP2 = utf8_decode($CEP);

	$CNH = $_POST['cnh'];
	$CNH2 = utf8_decode($CNH);

	$TIPO_SANGUINEO = $_POST['ts'];
	$TIPO_SANGUINEO2 = utf8_decode($TIPO_SANGUINEO);

	$STATUS = $_POST['status'];
	$STATUS2 = utf8_decode($STATUS);

	$COD_MOTORISTA = $_POST['cm'];
	$COD_MOTORISTA2 = utf8_decode($COD_MOTORISTA);

	$DATA_NASC = $_POST['dn'];
	$DATA_NASC2 = utf8_decode($DATA_NASC);

	$RG = $_POST['rg'];
	$RG2 = utf8_decode($RG);

	$CPF = $_POST['cpf'];
	$CPF2 = utf8_decode($CPF);




	
	if(!$conn){
		die('Connection Failed');
	}
	else{


			
		$sql = "INSERT INTO T_MOTORISTA (NOME, SOBRENOME, EMAIL, SENHA, TELEFONE, ENDERECO, NUMERO, COMPLEMENTO, CIDADE, ESTADO, CEP, CNH, TIPO_SANGUINEO, STATUS, COD_MOTORISTA, DATA_NASC, RG, CPF)
		VALUES ('$NOME2','$SOBRENOME2','$EMAIL2','$SENHA2','$TELEFONE2','$ENDERECO2','$NUMERO2','$COMPLEMENTO2','$CIDADE2','$ESTADO2','$CEP2','$CNH2','$TIPO_SANGUINEO2','$STATUS2','$COD_MOTORISTA2','$DATA_NASC2','$RG2','$CPF2')";

		if (mysqli_query($conn, $sql)) {
	    	echo 'Successfully added.';
			echo $sql;
		} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}		
		// $conn->close();
	}

?>