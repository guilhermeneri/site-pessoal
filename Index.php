<?php
	Session_start();

	include("conexao.php") ?>
<!doctype html>
<html lang="pt-Br">
<head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="Index.php">HOTEL VIRTUAL</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="Index.php">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="Login.php">Login<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="Criar.php">Criar Conta<span class="sr-only">(current)</span></a>
			</li>
			
		</ul>
	</div>
</nav>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<title>HOTEL VIRTUAL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<main  role="main">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="first-slide" src="images/papel3.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="second-slide" src="images/papel2.png" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="third-slide" src="images/papel.jpg" alt="Third slide">
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a></br>
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
<!-- Three columns of text below the carousel -->
	<div class="row">
		<div class="col-lg-4">
			<img class="rounded-circle" src="images/test.jpg" alt="Generic placeholder image" width="140" height="140">
			<h2></br>Hotel 5 Estrelas!!</h2>
			<p></br>O melhor Hotel da Cidade 5 Estrelas, para atender melhor você!</br>Com tudo que você tem direito!!</p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img class="rounded-circle" src="images/test3.jpg" alt="Generic placeholder image" width="140" height="140">
			<h2></br>Área de Lazer</h2>
			<p></br>Oferecemos área de lazer para toda a família</br>Onde a diversão é garantida!</p>
		</div><!-- /.col-lg-4 -->
		<div class="col-lg-4">
			<img class="rounded-circle" src="images/test2.jpg" alt="Generic placeholder image" width="140" height="140">
			<h2></br>Café da Manhã</h2>
			<p>Oferecemos também um café da manhã completo com tudo que você tem direito!!</br>isso tudo incluso no pacote escolhido por você!</p>
		</div></br><!-- /.col-lg-4 -->
	</div></<!-- /.row -->
<!-- START THE FEATURETTES -->
	<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading"><span class="text-muted"></br>Uma ótima opção para sua estadia!</span></h2></br>
				<p class="lead">O Hotel Virtual tem localização privilegiada no Setor Hoteleiro Norte. Em poucos minutos é possível chegar a diversos centros empresariais, atrações turísticas e também ao Aeroporto Internacional de Brasília.

Ideal para quem visita a cidade a passeio ou a trabalho, o hotel quatro estrelas oferece espaços para eventos, restaurante de culinária contemporânea com cardápio à la carte variado, ampla área de lazer, pacotes especiais e uma belíssima vista para o Eixo Monumental. Desfrute de uma experiência sofisticada no Distrito Federal.</p>
			</div>
			<div class="col-md-5">
				<img class="featurette-image img-fluid mx-auto" src= "images/1.jpg"  alt="Generic placeholder image">
			</div>
		</div>
	<hr class="featurette-divider">
		<div class="row featurette">
			<div class="col-md-7 order-md-2">
				<h2 class="featurette-heading"><span class="text-muted"></br>Muito conforto para que você se sinta em casa!!</span></h2>
				<p class="lead"></br>Pontos mais procurados nas proximidades:</br>
Parque da Cidade,
Eixo Monumental,
Centro de Convenções Ulisses Guimarães,
Estádio Nacional Mané Garrincha,
Ginásio Nilson Nelson,
Esplanada dos Ministérios,
Palácio do Planalto,
Museu Nacional,
Supremo Tribunal Federal,
Instituto Nacional de Meteorologia,
Memorial JK,
Catedral Metropolitana Nossa Senhora Aparecida,
Planetário de Brasília,
Brasília Shopping,
Shopping Conjunto Nacional.</p>
			</div>
			<div class="col-md-5 order-md-1">
				<img class="featurette-image img-fluid mx-auto" src= "images/hotel2.jpg"  alt="Generic placeholder image">
			</div>
		</div>
</div></br><!-- /.container -->
<!-- FOOTER -->
<footer class="container">
<p class="float-right"><a href="#">Volte para o Topo</a></p>
<p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p></br>
</footer>
</main> 
<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
$('.js-tilt').tilt({
scale: 1.1
})
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
</body>
</html>