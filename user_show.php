<?php
session_start();
if(!isset($_SESSION['user']))
	header('Location:register.php');
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/question_show.css">
	<title>show question</title>
</head>

<body>
<?php
    require_once('./connection.php');

    require_once('./header.php');

	$sql = "SELECT * FROM `users` ";
	

	$result = $conn->query($sql);


	   
?>
<div class="container">
<table border=1 style="width:100%">

<?php
 while($row = $result->fetch_assoc()){ 
?>
<tr>
    <td><?php echo $row['first_name'] ?></td>
    <td><?php echo $row['last_name'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><?php echo $row['wilaya'] ?></td>
</tr>

 <?php } ?>
</table>
</div>
<?php

$conn->close();

?>


</body>

</html>