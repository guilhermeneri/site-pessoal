<?php 
session_start();
$con = mysqli_connect("localhost", "root", "", "teste");
	
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$username = $_POST['username'];
$email = $_POST['email'];
$address = $_POST['address'];
$address2 = $_POST['address2'];
$country = $_POST['country'];
$state = $_POST['state'];
$zip = $_POST['zip'];



$result = "INSERT INTO pagamento(firstName, lastName, username, email, address, address2, country, state, zip, ccnumber, ccexpiration, cccvv) VALUES ('{$firstName}','{$lastName}', '{$username}', '{$email}', '{$address}', '{$address2}', '{$country}', '{$state}', '{$zip}')";
$result = mysqli_query($con,$result);

echo "
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Site/pagamento_realizado.php'>";
	
			
?>