<?php
session_start();
header('Content-Type:'."text/plain");

include("conexao.php");

  $AcessoCentral = new PDO('mysql:host='.$servidorCentral.';dbname='.$bancoCentral.'',''.$usuarioCentral.'',''.$senhaCentral.'', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"))or print (mysql_error());

    if ($_GET["COD_MOTORISTA "]=="")
    {
    $sql = "SELECT * FROM T_MOTORISTA order by STATUS desc";
     $result = $AcessoCentral->query($sql);
      $rows = $result->fetchAll();
        foreach ($rows as $rs)
          { 
            $arquivos= array('AbreMotorista'=>$rows);
          }
          echo json_encode($arquivos);
    }else{
    $sql = "SELECT * FROM T_MOTORISTA where COD_MOTORISTA=".$_GET["COD_MOTORISTA "]."";
     $result = $AcessoCentral->query($sql);
      $rows = $result->fetchAll();
        foreach ($rows as $rs) 
          { 
            $arquivos= array('AbreMotorista'=>$rows);
          }
          echo json_encode($arquivos);
    }
            $result = null;
          $rows = null;
 ?>