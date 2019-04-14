<?php
session_start();
if(!isset($_SESSION['user']))
	header('Location:login.php');
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
    body{
        background-color:#00584c;
        color:#00584c;
    }
    h1{
        padding:5%;
        border:solid 1px #147129;
        border-radius:5px;
        text-align:center;
        font-weight:bold;
        font-size:35px;
        background-color:#caf3d3;
    }
    </style>
	<title>done</title>
</head>

<body>
    <div class="container">
<h1>شكرا لك.. تم الإجابة</h1>
    </div>
</body>

</html>