<?php

	require_once('./connection.php');
	$past_task = $_POST['past_task'];
	$now_task = $_POST['now_task'];
	$id = $_POST['id'];

	$sql="UPDATE `reports1` SET `past_task` = $past_task, `now_task` = $now_task WHERE `id` = $id;";
	$result = $conn->query($sql);
?>