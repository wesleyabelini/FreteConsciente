<?php
/* Define o limitador de cache para 'private' */
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* Define o limite de tempo do cache em 30 minutos */
session_cache_expire(30);
$cache_expire = session_cache_expire();
// session_start inicia a sessão
session_start();

include("../conexao.php");
  	// \/ ######################################## Busca dados de laboratórios ####################################### \/ //


  	// \/ ######################################## Busca dados de Cliente ####################################### \/ //
           	$ConexaoLaboratorio = new PDO('mysql:host='.$servidorCentral.';dbname='.$bancoCentral.'',''.$usuarioCentral.'',''.$senhaCentral.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"))or print (mysql_error());

	           	$sql = "SELECT * FROM T_USU_TRANSP where EMAIL='".$_POST['Email']."' and SENHA='".$_POST['Senha']."'";
     $result = $ConexaoLaboratorio->query($sql);
      $rows = $result->fetchAll();
        foreach ($rows as $rs) 
          { 
            $IDTRANSUSU=$rs['$IDTRANSUSU'];
            $EMAIL=$rs['EMAIL'];
            $SENHA=$rs['SENHA'];
            $IDTRANS=$rs['IDTRANS'];
            $_SESSION['NOME']=$rs['NOME'];
            $_SESSION['IDTRANSUSU']=$IDTRANSUSU;
            $_SESSION['IDTRANS']=$IDTRANS;
            header('location:index.php');

            
           }

  	// /\ ######################################## Busca dados de Cliente ####################################### /\ //
       //  }
  	
//}  
  	// /\ ######################################## Busca dados de laboratórios ####################################### /\ //
$res = null;
$ConfigProtese = null;
$ConexaoLaboratorio = null;
?>