<?php

$user = 'frete150_usu';
$password = 'frete#2015';
$db = 'frete150_db';
$host = 'freteconsciente.com.br';



$conn = mysqli_connect($host, $user, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$email = trim($_GET['email']);
$senha = trim($_GET['senha']);
	
	if(!$conn){
		die('Connection Failed');
	}
	else{
			
			$sql = "SELECT DISTINCT NOME, COD_MOTORISTA, STATUS FROM T_MOTORISTA WHERE EMAIL='$email' AND SENHA='$senha'";
			$result = $conn->query($sql);

			$records= array();
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	$records[] = $row;

			   	}
			   	echo json_encode($records);
			} else {
			    echo "0 results";
			}
	}

?>