      <div class="row">
      <?php
      $json_str = file_get_contents("http://freteconsciente.com.br/lista-frete.php?IDFRETE=".$_GET["IDFRETE"]."&Token=2015frank87451");
      $jsonObj = json_decode($json_str);
        $ListaFrete = $jsonObj->ListaFrete;
      foreach ( $ListaFrete as $e )
        {
          $IDFRETE=$e->IDFRETE;
          $IDCLIENTE=$e->IDCLIENTE;
          $IDMOTORISTA=$e->IDMOTORISTA;
          $O_ENDERECO=$e->O_ENDERECO;
          $O_NUMERO=$e->O_NUMERO;
          $O_COMPLEMENTO=$e->O_COMPLEMENTO;
          $O_CIDADE=$e->O_CIDADE;
          $O_ESTADO=$e->O_ESTADO;
          $O_DIA = substr($e->O_DATA,6,2);
          $O_MES = substr($e->O_DATA,4,2);
          $O_ANO = substr($e->O_DATA,0,4);
          $O_HORA=$e->O_HORA;

          $D_ENDERECO=$e->D_ENDERECO;
          $D_NUMERO=$e->D_NUMERO;
          $D_COMPLEMENTO=$e->D_COMPLEMENTO;
          $D_CIDADE=$e->D_CIDADE;
          $D_ESTADO=$e->D_ESTADO;

          $D_DIA = substr($e->D_DATA,6,2);
          $D_MES = substr($e->D_DATA,4,2);
          $D_ANO = substr($e->D_DATA,0,4);

          $ABRE_DIA = substr($e->DATA_ABERTURA,6,2);
          $ABRE_MES = substr($e->DATA_ABERTURA,4,2);
          $ABRE_ANO = substr($e->DATA_ABERTURA,0,4);

          $N_ORDEM_SERVICO = $e->N_ORDEM_SERVICO;
          $N_NOTA_FISCAL = $e->N_NOTA_FISCAL;
          $CONTATO = $e->CONTATO;
        ?>
        <div class="col-md-12">
        <?php
        if ($_GET["IDFRETE"]=="") { ?>
          <div class="col-md-2 ">
            <a class="frank-not-titulo" href="?IDFRETE=<?php echo $IDFRETE;?>"><img border="0" src="<?php echo $IDMOTORISTA;?>" width="160" height="122"></a>
          </div>          
          <div class="col-md-10 ">
            <a class="frank-not-titulo" href="?IDFRETE=<?php echo $IDFRETE;?>"><?php echo $IDMOTORISTA;?></a><br>
            <a class="frank-not-destaque" href="?IDFRETE=<?php echo $IDFRETE;?>"><?php echo $O_ENDERECO;?></a>
          </div>
          <div class="col-md-12"><br>
          </div>
        <?php }else{ ?>
         <!-- <div class="col-md-6 frank-not-data"><?php echo $DiaNot;?>/<?php echo $MesNot;?>/<?php echo $AnoNot;?></div>
          <div align="right" class="col-md-6 frank-not-autor">Autor: <?php echo $e->Autor;?></div>
          <div class="col-md-12 frank-not-titulo"><?php echo $e->TituloNot;?></div>
          <div class="col-md-12 frank-not-destaque"><?php echo $e->DestaqueNot;?></div>
          <div class="col-md-12 frank-not-text"><?php echo $e->TxtNot;?></div>
          <div class="col-md-12"><br></div>
          <div class="col-md-12 frank-not-autor"><a target="_blank" href="<?php echo $e->LinkNot;?>"><?php echo $e->LinkNot;?></a></div>
          <div class="col-md-12"><br></div>-->

          


        <?php } ?>
        </div>
        <?php } ?>
      </div>