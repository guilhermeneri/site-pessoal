<?php
	Session_start();
?>
<?php 
#Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 

    #Recebe o Email Postado
    $email = $_POST['email'];

    #Conecta banco de dados 
    $con = mysqli_connect("localhost", "root", "", "teste");
    $sql = mysqli_query($con, "SELECT * FROM usuario WHERE email = '{$email}'") or print mysql_error();
 
		if(mysqli_num_rows($sql)>0){
		
			echo
			"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Site/login.php'>
			<script type=\"text/javascript\">
				alert(\"Uma mensagem de recuperação foi enviado para seu e-mail, verifique sua caixa de mensagens!\")
				</script>";
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Site/Recuperar.php'>
					<script type=\"text/javascript\">
						alert(\"E-mail inválido!!!\");
					</script>
				";	
			} 
}
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
<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
?>
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-pic js-tilt" data-tilt>
				<img src="images/img-01.png" alt="IMG"></br></br></br></br>
			</div>
				<form method="POST" action='' class="login100-form validate-form">
					<span class="login100-form-title">Digite seu e-mail para recuperação:</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
					<button name ="ok" class="login100-form-btn">Recuperar</button></br></br>
					</div>
									
				</form></br>
		</div>
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