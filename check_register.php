<?php

if(isset($_POST['phone'])){
	require_once('./connection.php');

	$firs_name  = $_POST['firs_name'];
	$last_name  = $_POST['last_name'];
	$phone      = $_POST['phone'];
	$password   = $_POST['password'];
	$wilaya     = $_POST['wilaya'];
	
    $sql= "INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `password`, `wilaya`)".
    " VALUES (NULL, '$firs_name', '$last_name', '$phone', '$password', '$wilaya');";

	if($conn->query($sql)){
		header('Location:register_done.php');
	}
	

}

?>