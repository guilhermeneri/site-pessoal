<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "teste");

$room_type = $_POST['room_type'];
$room_number = $_POST['room_number'];
$person_number = $_POST['person_number'];
$child_number = $_POST['child_number'];
$date_days = $_POST['date_days'];


$result = "INSERT INTO quarto(room_type, room_number, person_number, child_number, date_days) VALUES ('{$room_type}','{$room_number}', '{$person_number}','{$child_number}','{$date_days}')";
$result = mysqli_query($con,$result);
echo "
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/Site/Pagamento.php'>
	<script type=\"text/javascript\">
		alert(\"Seleção feita com sucesso!!\");
	</script>";	
?>