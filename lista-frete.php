<?php
session_start();
header('Content-Type:'."text/plain");

include("conexao.php");

  $AcessoCentral = new PDO('mysql:host='.$servidorCentral.';dbname='.$bancoCentral.'',''.$usuarioCentral.'',''.$senhaCentral.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"))or print (mysql_error());

    if ($_GET["IDFRETE"]=="")
    {
    $sql = "SELECT * FROM T_FRETE order by DATA_ABERTURA desc";
     $result = $AcessoCentral->query($sql);
      $rows = $result->fetchAll();
        foreach ($rows as $rs) 
          { 
            $arquivos= array('ListaFrete'=>$rows);
          }
          echo json_encode($arquivos);
    }else{
    $sql = "SELECT * FROM T_FRETE where IDFRETE=".$_GET["IDFRETE"]."";
     $result = $AcessoCentral->query($sql);
      $rows = $result->fetchAll();
        foreach ($rows as $rs) 
          { 
            $arquivos= array('ListaFrete'=>$rows);
          }
          echo json_encode($arquivos);
    }
            $result = null;
          $rows = null;
 ?>