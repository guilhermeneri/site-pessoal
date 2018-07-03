<?php
	session_start();
?>
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
				<a class="nav-link" href="Reservar.php">Reservar Quarto<span class="sr-only">(current)</span></a>
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
		<div class="limiter">
			<div class="container-login100">
			<form method="POST" action="valida_pagamento.php" class="container-login100">
				<div class="wrap-login100">
					<div class="container">
						<h2 class="text-center">Pagamento</h2></br>
						<div class="col-md-12 order-md-1">
								<div class="row">
										<div class="col-md-6 mb-3">
											<label>Primeiro Nome:</label>
											<input type="text" class="form-control" name="firstName" placeholder="Digite seu Primeiro Nome"  required>
										</div>
										<div class="col-md-6 mb-3">
											<label>Sobrenome:</label>
											<input type="text" class="form-control" name="lastName" placeholder="Digite seu Sobrenome"  required>
										</div>
									</div>
									<div class="mb-3">
										<label>Nome de usuário:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text">@</span>
											</div>
											<input type="text" class="form-control"  placeholder="Digite seu nome de usuário" name="username"required>
										</div>
									</div>
									<div class="mb-3">
										<label for="email">Email:<span class="text-muted"></span></label>
										<input type="email" class="form-control"  name="email" placeholder="você@exemplo.com"required>
									</div>
									<div class="mb-3">
										<label>Endereço:</label>
										<input type="text" class="form-control"  name="address" placeholder="Quadra/Conjunto/Casa" required>
									</div>
									<div class="mb-3">
										<label>Complemento:<span class="text-muted">(Optional)</span></label>
										<input type="text" class="form-control"  name="address2" placeholder="Apartamento/Casa/Lote">
									</div>
									<div class="row">
										<div class="col-md-12 mb-3">
											</br><h2 class="text-center">Forma de Pagamento</h2>
											<label>País</label>
												<select class="custom-select d-block w-100" name="country" required>
													<option value="África do Sul">África do Sul</option>
													<option value="Albânia">Albânia</option>
													<option value="Alemanha">Alemanha</option>
													<option value="Andorra">Andorra</option>
													<option value="Angola">Angola</option>
													<option value="Anguilla">Anguilla</option>
													<option value="Antigua">Antigua</option>
													<option value="Arábia Saudita">Arábia Saudita</option>
													<option value="Argentina">Argentina</option>
													<option value="Armênia">Armênia</option>
													<option value="Aruba">Aruba</option>
													<option value="Austrália">Austrália</option>
													<option value="Áustria">Áustria</option>
													<option value="Azerbaijão">Azerbaijão</option>
													<option value="Bahamas">Bahamas</option>
													<option value="Bahrein">Bahrein</option>
													<option value="Bangladesh">Bangladesh</option>
													<option value="Barbados">Barbados</option>
													<option value="Bélgica">Bélgica</option>
													<option value="Benin">Benin</option>
													<option value="Bermudas">Bermudas</option>
													<option value="Botsuana">Botsuana</option>
													<option value="Brasil" selected>Brasil</option>
													<option value="Brunei">Brunei</option>
													<option value="Bulgária">Bulgária</option>
													<option value="Burkina Fasso">Burkina Fasso</option>
													<option value="botão">botão</option>
													<option value="Cabo Verde">Cabo Verde</option>
													<option value="Camarões">Camarões</option>
													<option value="Camboja">Camboja</option>
													<option value="Canadá">Canadá</option>
													<option value="Cazaquistão">Cazaquistão</option>
													<option value="Chade">Chade</option>
													<option value="Chile">Chile</option>
													<option value="China">China</option>
													<option value="Cidade do Vaticano">Cidade do Vaticano</option>
													<option value="Colômbia">Colômbia</option>
													<option value="Congo">Congo</option>
													<option value="Coréia do Sul">Coréia do Sul</option>
													<option value="Costa do Marfim">Costa do Marfim</option>
													<option value="Costa Rica">Costa Rica</option>
													<option value="Croácia">Croácia</option>
													<option value="Dinamarca">Dinamarca</option>
													<option value="Djibuti">Djibuti</option>
													<option value="Dominica">Dominica</option>
													<option value="EUA">EUA</option>
													<option value="Egito">Egito</option>
													<option value="El Salvador">El Salvador</option>
													<option value="Emirados Árabes">Emirados Árabes</option>
													<option value="Equador">Equador</option>
													<option value="Eritréia">Eritréia</option>
													<option value="Escócia">Escócia</option>
													<option value="Eslováquia">Eslováquia</option>
													<option value="Eslovênia">Eslovênia</option>
													<option value="Espanha">Espanha</option>
													<option value="Estônia">Estônia</option>
													<option value="Etiópia">Etiópia</option>
													<option value="Fiji">Fiji</option>
													<option value="Filipinas">Filipinas</option>
													<option value="Finlândia">Finlândia</option>
													<option value="França">França</option>
													<option value="Gabão">Gabão</option>
													<option value="Gâmbia">Gâmbia</option>
													<option value="Gana">Gana</option>
													<option value="Geórgia">Geórgia</option>
													<option value="Gibraltar">Gibraltar</option>
													<option value="Granada">Granada</option>
													<option value="Grécia">Grécia</option>
													<option value="Guadalupe">Guadalupe</option>
													<option value="Guam">Guam</option>
													<option value="Guatemala">Guatemala</option>
													<option value="Guiana">Guiana</option>
													<option value="Guiana Francesa">Guiana Francesa</option>
													<option value="Guiné-bissau">Guiné-bissau</option>
													<option value="Haiti">Haiti</option>
													<option value="Holanda">Holanda</option>
													<option value="Honduras">Honduras</option>
													<option value="Hong Kong">Hong Kong</option>
													<option value="Hungria">Hungria</option>
													<option value="Iêmen">Iêmen</option>
													<option value="Ilhas Cayman">Ilhas Cayman</option>
													<option value="Ilhas Cook">Ilhas Cook</option>
													<option value="Ilhas Curaçao">Ilhas Curaçao</option>
													<option value="Ilhas Marshall">Ilhas Marshall</option>
													<option value="Ilhas Turks & Caicos">Ilhas Turks & Caicos</option>
													<option value="Ilhas Virgens (brit.)">Ilhas Virgens (brit.)</option>
													<option value="Ilhas Virgens(amer.)">Ilhas Virgens(amer.)</option>
													<option value="Ilhas Wallis e Futuna">Ilhas Wallis e Futuna</option>
													<option value="Índia">Índia</option>
													<option value="Indonésia">Indonésia</option>
													<option value="Inglaterra">Inglaterra</option>
													<option value="Irlanda">Irlanda</option>
													<option value="Islândia">Islândia</option>
													<option value="Israel">Israel</option>
													<option value="Itália">Itália</option>
													<option value="Jamaica">Jamaica</option>
													<option value="Japão">Japão</option>
													<option value="Jordânia">Jordânia</option>
													<option value="Kuwait">Kuwait</option>
													<option value="Latvia">Latvia</option>
													<option value="Líbano">Líbano</option>
													<option value="Liechtenstein">Liechtenstein</option>
													<option value="Lituânia">Lituânia</option>
													<option value="Luxemburgo">Luxemburgo</option>
													<option value="Macau">Macau</option>
													<option value="Macedônia">Macedônia</option>
													<option value="Madagascar">Madagascar</option>
													<option value="Malásia">Malásia</option>
													<option value="Malaui">Malaui</option>
													<option value="Mali">Mali</option>
													<option value="Malta">Malta</option>
													<option value="Marrocos">Marrocos</option>
													<option value="Martinica">Martinica</option>
													<option value="Mauritânia">Mauritânia</option>
													<option value="Mauritius">Mauritius</option>
													<option value="México">México</option>
													<option value="Moldova">Moldova</option>
													<option value="Mônaco">Mônaco</option>
													<option value="Montserrat">Montserrat</option>
													<option value="Nepal">Nepal</option>
													<option value="Nicarágua">Nicarágua</option>
													<option value="Niger">Niger</option>
													<option value="Nigéria">Nigéria</option>
													<option value="Noruega">Noruega</option>
													<option value="Nova Caledônia">Nova Caledônia</option>
													<option value="Nova Zelândia">Nova Zelândia</option>
													<option value="Omã">Omã</option>
													<option value="Palau">Palau</option>
													<option value="Panamá">Panamá</option>
													<option value="Papua-nova Guiné">Papua-nova Guiné</option>
													<option value="Paquistão">Paquistão</option>
													<option value="Peru">Peru</option>
													<option value="Polinésia Francesa">Polinésia Francesa</option>
													<option value="Polônia">Polônia</option>
													<option value="Porto Rico">Porto Rico</option>
													<option value="Portugal">Portugal</option>
													<option value="Qatar">Qatar</option>
													<option value="Quênia">Quênia</option>
													<option value="Rep. Dominicana">Rep. Dominicana</option>
													<option value="Rep. Tcheca">Rep. Tcheca</option>
													<option value="Reunion">Reunion</option>
													<option value="Romênia">Romênia</option>
													<option value="Ruanda">Ruanda</option>
													<option value="Rússia">Rússia</option>
													<option value="Saipan">Saipan</option>
													<option value="Samoa Americana">Samoa Americana</option>
													<option value="Senegal">Senegal</option>
													<option value="Serra Leone">Serra Leone</option>
													<option value="Seychelles">Seychelles</option>
													<option value="Singapura">Singapura</option>
													<option value="Síria">Síria</option>
													<option value="Sri Lanka">Sri Lanka</option>
													<option value="St. Kitts & Nevis">St. Kitts & Nevis</option>
													<option value="St. Lúcia">St. Lúcia</option>
													<option value="St. Vincent">St. Vincent</option>
													<option value="Sudão">Sudão</option>
													<option value="Suécia">Suécia</option>
													<option value="Suiça">Suiça</option>
													<option value="Suriname">Suriname</option>
													<option value="Tailândia">Tailândia</option>
													<option value="Taiwan">Taiwan</option>
													<option value="Tanzânia">Tanzânia</option>
													<option value="Togo">Togo</option>
													<option value="Trinidad & Tobago">Trinidad & Tobago</option>
													<option value="Tunísia">Tunísia</option>
													<option value="Turquia">Turquia</option>
													<option value="Ucrânia">Ucrânia</option>
													<option value="Uganda">Uganda</option>
													<option value="Uruguai">Uruguai</option>
													<option value="Venezuela">Venezuela</option>
													<option value="Vietnã">Vietnã</option>
													<option value="Zaire">Zaire</option>
													<option value="Zâmbia">Zâmbia</option>
													<option value="Zimbábue">Zimbábue</option>
													</select></br>
													<div class="col-md-12 mb-3">
														<label>Estado:<span class="text-muted"> (Optional)</span></label>
														<input type="text" class="form-control"  name="state" placeholder="Digite seu estado">
													</div>
													<div class="col-md-12 mb-3">
														<label>CEP</label>
														<input type="text" class="form-control"  name="zip" placeholder="" required>
													</div>
										</div>
										<div class="d-block my-3">
											<div class="custom-control custom-radio">
												<input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
													<label class="custom-control-label">Cartão de Crédito</label>
											</div>
											<div class="custom-control custom-radio">
												<input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
												<label class="custom-control-label">Cartão de Débito</label>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8 mb-3">
												<label>Nome do Titular</label>
												<input type="text" class="form-control" name="cc_name" placeholder="" required>
												<small class="text-muted">Nome completo conforme exibido no cartão</small>
											</div>
											<div class="col-md-8 mb-3">
												<label>Número do Cartão de Crédito</label>
												<input type="text" class="form-control" name="cc_number" placeholder="" required>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3 mb-3">
												<label for="cc_expiration1">Expiração</label>
												<input type="text" class="form-control" name="cc_expiration" placeholder="" required>
											</div>
											<div class="col-md-3 mb-3">
												<label for="cc_cvv1">CVV</label>
												<input type="text" class="form-control" name="cc_cvv" placeholder="" required>
											</div>
										</div>
										<button class="btn btn-primary btn-lg btn-block">Confirmar Pagamento</button>
						</div>
					</div>				
					<footer class="my-5 pt-5 text-muted text-center text-small">
						<p class="mb-1">&copy; 2017-2018 HV</p>
						<ul class="list-inline">
							<li class="list-inline-item"><a href="#">Privacidade</a></li>
							<li class="list-inline-item"><a href="#">Termos</a></li>
							<li class="list-inline-item"><a href="#">Suporte</a></li>
						</ul>
					</footer>
				</div>
			</div>			
		</div>
	</form>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>				
	

	
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