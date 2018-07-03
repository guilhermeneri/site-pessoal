<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "teste");

$email=$_POST['email'];
$pass=$_POST['pass'];

$consulta="SELECT * FROM usuario WHERE email= '$email' and pass='$pass' ";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0){
	header("Location: Reservar.php");
}
else{
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Site/Login.php'>
		<script type=\"text/javascript\">
			alert(\"Email ou Senha Inválidos\");
		</script>";
}
mysqli_free_result($resultado);
mysqli_close($con);
?>