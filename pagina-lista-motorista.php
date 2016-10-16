<?php
session_start();
/* Define o limitador de cache para 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* Define o limite de tempo do cache em 30 minutos */
session_cache_expire(30);
$cache_expire = session_cache_expire();
// session_start inicia a sessão
session_start();

include("conexao.php");

$ConfigFrank = new PDO('mysql:host='.$servidorCentral.';dbname='.$bancoCentral.'',''.$usuarioCentral.'',''.$senhaCentral.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"))or print (mysql_error());

$sql = "SELECT * FROM T_MOTORISTA where STATUS='ATIVO'";
     $result = $ConfigFrank->query($sql);
      $rows = $result->fetchAll();
        foreach ($rows as $rs) 
          { 
          	$IDMOTORISTA=$rs['$IDMOTORISTA'];
          	$NOME=$rs['NOME'];
          	$SOBRENOME=$rs['SOBRENOME'];
          	$TELEFONE=$rs['TELEFONE'];
          	$ENDERECO=$rs['ENDERECO'];
          	$DATA_NASC=$rs['DATA_NASC'];
          	$CNH=$rs['CNH'];
           }
?>