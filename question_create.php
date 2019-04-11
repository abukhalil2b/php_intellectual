<?php
session_start();

if(!isset($_SESSION['user']))
	header('Location:login.php');
if($_SESSION['user']['id']!=1)
	header('Location:question_show.php');
	
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>show question</title>
	<style>
		.container{
			padding:5px;
		}
		input,select,button{
			width:50%;
			height:40px;
			border-radius:5px;
			font-size:18px;font-weight:bold;
		}
	</style>
</head>

<body>
<div class="container">

<?php
    require_once('./connection.php');

	$sql = "SELECT * FROM `questions` order by id desc limit 1";
	
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
?>

<?php 
	echo $row['content'] . '<br/>'; 
	echo $row['a'] . '<br/>'; 
	echo $row['b'] . '<br/>'; 
	echo $row['c'] . '<br/>'; 
	echo $row['d'] . '<br/>'; 
	echo $row['ans'] . '<br/>'; 
?>
<form action="question_store.php" method="post">
	<input name="content" >
	<input name="a" >
	<input name="b" >
	<input name="c" >
	<input name="d" >
	<select name="ans">
		<option value="a">a</option>
		<option value="b">b</option>
		<option value="c">c</option>
		<option value="d">d</option>
	</select>
	<button >save</button>
</form>
	
</div>
</body>

</html>