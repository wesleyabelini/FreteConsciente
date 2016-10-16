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

$sql = "SELECT * FROM T_FRETE where IDTRANS='".$_SESSION["IDTRANS"]."'";
     $result = $ConfigFrank->query($sql);
      $rows = $result->fetchAll();
        foreach ($rows as $rs) 
          { 
          	$IDFRETE=$rs['IDFRETE'];
          	$IDCLIENTE=$rs['IDCLIENTE'];
          	$IDTRANS=$rs['IDTRANS'];
          	$O_ENDERECO=$rs['O_ENDERECO'];
          	$O_COMPLEMENTO=$rs['O_COMPLEMENTO'];
          	$O_CIDADE=$rs['O_CIDADE'];
          	$O_ESTADO=$rs['O_ESTADO'];
          	$O_CEP=$rs['O_CEP'];
          	$O_DATA=$rs['O_DATA'];
          	$O_HORA=$rs['O_HORA'];
          	$D_ENDERECO=$rs['D_ENDERECO'];
          	$D_COMPLEMENTO=$rs['D_COMPLEMENTO'];
          	$D_CIDADE=$rs['D_CIDADE'];
          	$D_ESTADO=$rs['D_ESTADO'];
          	$D_CEP=$rs['D_CEP'];
          	$D_DATA=$rs['D_DATA'];
          	$D_HORA=$rs['D_HORA'];
          	$VALOR=$rs['VALOR'];
          	$STATUS=$rs['STATUS'];
          	$OBS=$rs['OBS'];
          	$DATA_ABERTURA=$rs['DATA_ABERTURA'];
           }
?>