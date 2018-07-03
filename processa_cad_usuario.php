<?php 
#Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 

    #Recebe o Email Postado
    $email = $_POST['email'];

    #Conecta banco de dados 
    $con = mysqli_connect("localhost", "root", "root", "teste");
    $sql = mysqli_query($con, "SELECT * FROM usuario WHERE email = '{$email}'") or print mysql_error();
 
		if(mysqli_num_rows($sql)>0){
		
			echo
			"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Site/Criar.php'>
			<script type=\"text/javascript\">
				alert(\"Email j? cadastrado favor tente outro email!\")
				</script>";
			}else{
				$name = $_POST['name'];
				$email = $_POST['email'];
				$pass = $_POST['pass'];
				//echo "$nome_usuario - $email_usuario";
				$result = "INSERT INTO usuario(name, email, pass) VALUES ('{$name}','{$email}', '{$pass}')";
				$result = mysqli_query($con,$result);
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Site/Login.php'>
					<script type=\"text/javascript\">
						alert(\"Cadastrou com sucesso!!!\");
					</script>
				";	
			} 
}
?>