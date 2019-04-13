<?php

if(isset($_POST['phone'])){
	require_once('./connection.php');

	$first_name  = $_POST['first_name'];
	$last_name  = $_POST['last_name'];
	$phone      = $_POST['phone'];
	$password   = $_POST['password'];
	$wilaya     = $_POST['wilaya'];
    
    $sql_check = "SELECT * FROM `users` WHERE phone = $phone"
    $result = $conn->query($sql_check);
    if($result->num_rows==1){
        header('Location:register_done.php');die();
    }
    
    
    $sql= "INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `password`, `wilaya`)".
    " VALUES (NULL, '$first_name', '$last_name', '$phone', '$password', '$wilaya');";

	if($conn->query($sql)){
		header('Location:register_done.php');
	}
	

}

?>