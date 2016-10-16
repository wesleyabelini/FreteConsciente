<?php $urlatual=$_SERVER['SCRIPT_NAME']; $diretoriourl= substr($urlatual,($ValorUrlInicial+1));?>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav navbar-right">		
		<!--<li <?php if ($diretoriourl=="index.php") { echo"class='active'"; }else{}?>><a href="../index.php">home</a></li>-->

		<li <?php if ($diretoriourl=="quem-somos.php") { echo"class='active'"; }else{}?>><a href="#">Quem somos</a></li>
		<li <?php if ($diretoriourl=="servico.php") { echo"class='active'"; }else{}?>><a href="#portfolio">Serviços</a></li>
		<li <?php if ($diretoriourl=="noticia.php") { echo"class='active'"; }else{}?>><a href="Cadastrese.php">Cadastre-se</a></li>
		<li <?php if ($diretoriourl=="suporte.php") { echo"class='active'"; }else{}?>><a href="#">Suporte</a></li>
		<li <?php if ($diretoriourl=="contato.php") { echo"class='active'"; }else{}?>><a href="#">Contato</a></li>
		<li <?php if ($diretoriourl=="contato.php") { echo"class='active'"; }else{}?>><a class="login" href="login.php">acesso</a></li>
	</ul> <!-- /.nav -->
</div>