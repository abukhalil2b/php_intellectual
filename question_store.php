<?php

if(isset($_POST['content'])){
	require_once('./connection.php');
	$content = $_POST['content'];
	$a 		= $_POST['a'];
	$b 		= $_POST['b'];
	$c 		= $_POST['c'];
	$d 		= $_POST['d'];
	$ans 	= $_POST['ans'];
	if($content==''||$a==''||$b==''||$c==''||$d==''||$ans=='')
	{
		header('Location:question_create.php');die();
	}
	$sql="INSERT INTO `questions` (`id`, `content`, `a`, `b`, `c`, `d`, `ans`)".
	" VALUES (NULL, '$content', '$a', '$b', '$c', '$d', '$ans');";
	if($conn->query($sql))
		header('Location:question_create.php');
	}
?>