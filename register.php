<?php
session_start();
if(isset($_SESSION['user']))
	header('Location:question_show.php');
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/login.css">
	<title>Login</title>
</head>

<body>

<?php
    require_once('./connection.php');
    require_once('./header.php');
    require_once('./_login.php');
?>

</body>

</html>