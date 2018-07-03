<?php
	Session_start();
	include_once("conexao.php");
	$num = 100
	
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
				<a class="nav-link" href="Login.php">Login<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="Criar.php">Criar Conta<span class="sr-only">(current)</span></a>
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
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

		<form method="POST" action="valida_reservar.php" class="login100-form validate-form">
					<span class="login100-form-title">
						Reservar Quarto
					</span>
			  <div class="form-group">
			 <label>Quantos dias deseja ficar?:</br><p class="text-muted">o valor da diaria aparecerá somente ao selecionar a categoria do quarto!</p></label></label>
                 <select class="input100" id="date_days" name="date_days" onchange="finalCost()"required>
                     <option value="" >Selecione os dias que deseja ficar</option>
                     <option value="0">11/06/2018 à 12/06/2018</option>
                     <option value="1">12/06/2018 à 14/06/2018</option>
                     <option value="2">14/06/2018 à 17/06/2018</option>
                     <option value="3">17/06/2018 à 21/06/2018</option>
                     <option value="4">21/06/2018 à 26/06/2018</option>
                     <option value="5">26/06/2018 à 02/07/2018</option>
                     <option value="6">02/07/2018 à 09/07/2018</option>
                     <option value="7">09/07/2018 à 17/07/2018</option>
                     <option value="8">17/07/2018 à 26/07/2018</option>
                     <option value="9">26/07/2018 à 05/08/2018</option>
                     <option value="10">05/08/2018 à 16/08/2018</option>
                     <option value="11">16/08/2018 à 28/08/2018</option>
                 </select>
			</div>	 
			 <div class="form-group">
                 <label>Categorias de Quarto:</label>
				 
                 <select class="input100" id="room_type" name="room_type" onchange="finalCost()"required>
                     <option value="" >Selecione Quarto</option>
                     <option value="100.50">Apartamento Superior</option>
                     <option value="150.50">Apartamento Superior Executivo</option>
                     <option value="200.50">Club Superior Executivo</option>
                     <option value="250.50">Club Suíte Executiva</option>
                     <option value="500.50">Club Suíte Presidencial</option>
                     <option value="850.50">Club Suíte Imperial</option>
                 </select>
             </div>
		     <div class="form-group">
                 <label>Números de Quartos:</label>
                 <select class="input100" id="room_number" name="room_number" onchange="finalCost()"required>
                     <option value="">0</option>
                     <option value="0">1</option>
                     <option value="1">2</option>
                     <option value="2">3</option>
                     <option value="3">4</option>
                     <option value="4">5</option>
                     <option value="5">6</option>
                     <option value="6">7</option>
				</select>
		     </div>
             <div class="form-group">
                 <label>Número de Adultos:</label>
                 <select class="input100" id="person_number" name="person_number" onchange="finalCost()"required>
                     <option value="">0</option>
                     <option value="50.50">1</option>
                     <option value="100.50">2</option>
                     <option value="150.50">3</option>
                     <option value="200.50">4</option>
                     <option value="250.50">5</option>
                     <option value="300.50">6</option>
                     <option value="350.50">7</option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Numero de Crianças:</label>
                 <select class="input100" id="child_number" name="child_number" onchange="finalCost()"required>
                     <option value="">0</option>
                     <option value="25.50">1</option>
                     <option value="50.50">2</option>
                     <option value="75.50">3</option>
                     <option value="100.50">4</option>
                     <option value="125.50">5</option>
                     <option value="150.50">6</option>
                     <option value="175.50">7</option>
                 </select>
             </div></br>


<script>
function ValidateForm(form)
{
	var date_checkin = Date.parse(form.date_checkin.value);
	var date_checkout = Date.parse(form.date_checkout.value);
	
	if(date_checkin>=date_checkout)
	{
		document.getElementById('date_checkout').value='';
		alert("Data de Checkout Inválida Selecione Novamente!");
		return false;
	}
	
	return true;
}
function valordiaria(){
	
}
function finalCost() {
	
	var v1 = document.getElementById("room_type").value
	var v2 = document.getElementById("room_number").value
	var v3 = document.getElementById("person_number").value
	var v4 = document.getElementById("child_number").value
	var v5 = document.getElementById("date_days").value
	
	document.getElementById("result").innerHTML = (v1*1)+(v1*v2)+(v3*1)+(v4*1)+(v1*v5);
}
</script>
             <div class="form-group">
                 <label>Custo Total (R$):</label>
                 </br><span id="result" style="background-color: #7527b0;color: #fff;padding: 9px 100px;font-weight: 500;font-size: 15px; margin-left: 10px;border-radius: 30px;"></span>
				</br><div class="container-login100-form-btn">
					<button class="login100-form-btn">Realizar Pagamento</button>
             </div>
			
         </form>
		 <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.datetimepicker.full.min.js"></script>
		</div>
	</div>
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