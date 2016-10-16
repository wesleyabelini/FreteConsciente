<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
    <!-- Favicon \/ -->
      <link rel="apple-touch-icon" sizes="57x57" href="../administracao/images/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="../administracao/images/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="../administracao/images/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="../administracao/images/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="../administracao/images/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="../administracao/images/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="../administracao/images/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="../administracao/images/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="../administracao/images/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="../administracao/images/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="../administracao/images/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="../administracao/images/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="../administracao/images/favicon-16x16.png">
      <!--<link rel="manifest" href="../administracao/manifest.json">-->
      <link rel="shortcut icon" href="../administracao/images/favicon.ico" />
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="../administracao/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
    <!-- Favicon /\ -->
<style>
.header{
	<?php
	$imagem=rand(1,2);
	if ($imagem=="1") {
		echo "background: url('images/Foto-Caminhao-tras.jpg');";
	}else{
		echo "background: url('images/Foto-Caminhao.jpg');";
	}
	?>
	background-repeat: no-repeat;
	background-position: top;
	background-size: cover;
	background-attachment: fixed;
	height: 100vh;
	color:#ED3237;
	text-transform: uppercase;
}
</style>


		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>Frete Consciente, por que você é responsável.</title>
		<link rel="alternate" type="application/rss+xml" href="franklink-rss.php" title="RSS feed para |F|ranklink">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/ionicons.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	   <!-- <link rel="stylesheet" href="assets/css/one-page.css">-->
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="assets/js/html5shiv.js"></script>
				<script src="assets/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="assets/js/selectivizr.js"></script>
		    <![endif]-->
		    <?php //include_once("google-analyticstracking.php") ?>
	</head>
<body>


<!-- Home -->
	<section class="" id="header">		
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php"><img src="images/Logo-Frete-Consciente.png" alt="FreteConsciente" class="Franklink"></a>
				</div> <!-- /.navbar-header -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <?php include("site_menu.php");?>
			    <!-- /.navbar-collapse -->

<div class="row">
  <div class="col-md-4"><img src="images/login-empresa-acesso.jpg" class="img-responsive" alt="Seu acesso"></div>
  <div class="col-md-8">
  	<form method="POST" action="empresa/passaporte.php">
	  <div class="form-group">
	    <label for="exampleInputEmail1">E-mail</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" name="Email" placeholder="E-mail">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Senha</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" name="Senha" placeholder="Senha">
	  </div>	  
	  <button type="submit"  class="btn btn-primary">Acessar</button>
  	</form>
  	<?php 
  	if ($_GET['erro']=="002") { ?>
  		<div class="col-md-12">Combinação de senha e e-mail invalidos.</div>
  	<?php }else{} ?>
  	
  </div>

</div>
<div class="row">

</div>



		  	</div><!-- /.container -->
		</nav>
		<div class="container">

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/568a08b797d0934d525b1966/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
			

		</div> <!-- /.container -->
	</section> <!-- /#header -->
	



	
<!-- Twitter Feed -->
	<section class="twitter-feed purple">
		<div class="container section-wrapper">
			<div class="section-title">
				twitter feed
			</div> <!-- /.section-title -->
			<div class="underline white"></div>
			<div class="owl-carousel twitter-owl">
				<div class="item">
					<p class="day">12 days ago</p>
					<p class="feed">
						We are glad to introduce our first HTML5/CSS3 Template called “PATROS” -http://t.co/mL9rufE7h8 @designscrazed @W3layouts @freshdesignweb
					</p>
					<div class="options">
						<a href="#"><span><i class="ion-reply"></i> replay</span></a>
						<a href="#"><span><i class="ion-social-twitter"></i> retweet</span></a>
						<a href="#"><span><i class="ion-heart"></i> favorite</span></a>
					</div>
				</div> <!-- /.item -->
				<div class="item">
					<p class="day">12 days ago</p>
					<p class="feed">
						We are glad to introduce our first HTML5/CSS3 Template called “PATROS” -http://t.co/mL9rufE7h8 @designscrazed @W3layouts @freshdesignweb
					</p>
					<div class="options">
						<a href="#"><span><i class="ion-reply"></i> replay</span></a>
						<a href="#"><span><i class="ion-social-twitter"></i> retweet</span></a>
						<a href="#"><span><i class="ion-heart"></i> favorite</span></a>
					</div>
				</div> <!-- /.item -->
				<div class="item">
					<p class="day">20 days ago</p>
					<p class="feed">
						We are glad to introduce our first HTML5/CSS3 Template called “PATROS” -http://t.co/mL9rufE7h8 @designscrazed @W3layouts @freshdesignweb
					</p>
					<div class="options">
						<a href="#"><span><i class="ion-reply"></i> replay</span></a>
						<a href="#"><span><i class="ion-social-twitter"></i> retweet</span></a>
						<a href="#"><span><i class="ion-heart"></i> favorite</span></a>
					</div>
				</div> <!-- /.item -->
				<div class="item">
					<p class="day">5 days ago</p>
					<p class="feed">
						We are glad to introduce our first HTML5/CSS3 Template called “PATROS” -http://t.co/mL9rufE7h8 @designscrazed @W3layouts @freshdesignweb
					</p>
					<div class="options">
						<a href="#"><span><i class="ion-reply"></i> replay</span></a>
						<a href="#"><span><i class="ion-social-twitter"></i> retweet</span></a>
						<a href="#"><span><i class="ion-heart"></i> favorite</span></a>
					</div>
				</div> <!-- /.item -->
			</div> <!-- /.owl-carousel -->
		</div> <!-- /.container -->
	</section> <!-- /.twitter-feed -->


<!-- Portfolio -->
	<section class="portfolio" id="portfolio">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				portfolio
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>
			<div class="row">
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/port-1.png" alt="port-1" class="port-item">
							<div class="portfolio-img-hover">
								<a href="#"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								Olivera Note <br><small>Fashion</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/port-2.png" alt="port-2" class="port-item">
							<div class="portfolio-img-hover">
								<a href="#"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								Shift Magazine <br><small>Photography</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/port-3.png" alt="port-3" class="port-item">
							<div class="portfolio-img-hover">
								<a href="#"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								Camp Pine Tree <br><small>Web Design</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/port-4.png" alt="port-4" class="port-item">
							<div class="portfolio-img-hover">
								<a href="#"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								Freeart App Design <br><small>Photography</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/port-5.png" alt="port-5" class="port-item">
							<div class="portfolio-img-hover">
								<a href="#"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								Large Poster Set <br><small>Marketing</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
				<div class="col-sm-4 col-xs-6">
					<div class="portfolio-item">
						<div class="portfolio-img">
							<img src="assets/images/port-6.png" alt="port-6" class="port-item">
							<div class="portfolio-img-hover">
								<a href="#"><img src="assets/images/plus.png" alt="plus" class="plus"></a>
							</div> <!-- /.portfolio-img-hover -->
						</div> <!-- /.portfolio-img -->
						<div class="portfolio-item-details">
							<div class="portfolio-item-name">
								Skilet Album Cover <br><small>Business</small>
							</div> <!-- /.portfolio-item-name -->
							<div class="port-heart">
								<i class="ion-ios-heart-outline"></i> 564
							</div> <!-- /.port-heart -->
						</div> <!-- /.portfolio-item-details -->
					</div> <!-- /.portfolio-item -->
				</div> <!-- /.col-md-4 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.portfolio -->


<!-- Note -->
	<section class="note purple">
		<div class="container section-wrapper text-center">
			<p class="quote">
				“When you’re a carpenter making a beautiful chest of drawers, you’re not going to use a piece of plywood on the back, even though it faces the wall and nobody will see it. You’ll know it’s there, so you’re going to use a beautiful piece of wood on the back. For you to sleep well at night, the aesthetic, the quality, has to be carried all the way through.”
			</p> <!-- /.quote -->
			<div class="quoter">Steve Jobs</div>
		</div> <!-- /.container -->
	</section> <!-- /.note -->


<!-- Fan Facts -->
	<section class="fun">
		<div class="container section-wrapper">
		<h2 class="section-title black">
				Fun Facts
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>	
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="fun-box">
						<div class="number">
							1956628
						</div>
						<div class="number-title">
							lines of code
						</div>
					</div> <!-- /.fun-box -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="fun-box">
						<div class="number">
							1473
						</div>
						<div class="number-title">
							cups of coffee
						</div>
					</div> <!-- /.fun-box -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="fun-box">
						<div class="number">
							500
						</div>
						<div class="number-title">
							projects delivered
						</div>
					</div> <!-- /.fun-box -->
				</div> <!-- /.col-md-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="fun-box">
						<div class="number">
							101
						</div>
						<div class="number-title">
							satisfied clients
						</div>
					</div> <!-- /.fun-box -->
				</div> <!-- /.col-md-3 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.fun -->


<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="copy">
						Copyright &copy; 2016 Studio Stern | Net Stern
					</div>
				</div>
				<div class="col-sm-4 text-center">
					<div class="social-icon">
						<a target="_blank" href="https://www.facebook.com/netstern.com.br/">
							<div class="icon fb">
								<i class="ion-social-facebook"></i>
							</div>
						</a>
						<a target="_blank" href="https://twitter.com/NetStern">
							<div class="icon twitter">
								<i class="ion-social-twitter"></i>
							</div>
						</a>
						<a target="_blank" href="https://plus.google.com/u/0/+NetsternBr">
							<div class="icon google">
								<i class="ion-social-googleplus"></i>
							</div>
						</a>
						<a target="_blank" type="application/rss+xml" href="http://franklink.com.br/franklink-rss.php">
							<div class="icon rss">
								<i class="ion-social-rss"></i>
							</div>
						</a>
					</div>		
				</div>
				<div class="col-sm-4 text-right">
					<div class="copy">
						Desenvolvido por <a target="_blank" href="http://www.netstern.com.br">netstern.com.br</a>. Todos os direitos são reservados
					</div>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer>
	


	<script src="assets/js/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/contact.js"></script>
	<!-- <script src="assets/js/smoothscroll.js"></script> -->
	<script src="assets/js/script.js"></script>


</body>
</html>