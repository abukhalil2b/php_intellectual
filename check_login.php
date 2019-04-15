<?php

if(isset($_POST['phone'])){
	require_once('./connection.php');

	$phone = $_POST['phone'];
	$password = $_POST['password'];
	
	$sql= "SELECT * FROM `users` WHERE phone = '$phone' AND password = '$password' ";

	$result = $conn->query($sql);
	if($result->num_rows==1){
		session_start();
		$_SESSION['user'] = $result->fetch_assoc();

		header('Location:question_show.php');
	}
	else{
		header('Location:register.php');
	}
	

}

?>
