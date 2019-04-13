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
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/question_show.css">
	<title>show question</title>
</head>

<body>
<?php
    require_once('./connection.php');

    require_once('./header.php');

	$sql = "SELECT * FROM `questions` order by id desc limit 1";
	

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$question_id =  $row['id'];
		$phone =  $_SESSION['user']['phone'];
		$sql2 = "SELECT id FROM `user_has_answer` WHERE `question_id` = $question_id AND `phone` = $phone ";
		$result2 = $conn->query($sql2);
		if($result2->num_rows > 0)
		header('Location:done.php');
	        
?>
<div class="container">

	<div class="content" > <?php echo $row["content"] ?>  </div>

	<form  method="post" action="answer_send.php">
		<input type="hidden" name="phone" value="<?php echo $phone ?>">
		<input type="hidden" value="a" name="choice">
		<input type="hidden" value="<?php echo $row['id'] ?>" name="question_id">
		<input type="hidden" value="<?php echo $row['ans'] ?>" name="ans">
		<button class="choice"><span class="txt"><?php echo $row["a"] ?></span></button>
	</form>

	<form  method="post" action="answer_send.php">
		<input type="hidden" name="phone" value="<?php echo $phone ?>">
		<input type="hidden" value="b" name="choice">
		<input type="hidden" value="<?php echo $row['id'] ?>" name="question_id">
		<input type="hidden" value="<?php echo $row['ans'] ?>" name="ans">
		<button class="choice"><span class="txt"><?php echo $row["b"] ?></span></button>
	</form>

	<form  method="post" action="answer_send.php">
		<input type="hidden" name="phone" value="<?php echo $phone ?>">
		<input type="hidden" value="c" name="choice">
		<input type="hidden" value="<?php echo $row['id'] ?>" name="question_id">
		<input type="hidden" value="<?php echo $row['ans'] ?>" name="ans">
		<button class="choice"><span class="txt"><?php echo $row["c"] ?></span></button>
	</form>

	<form  method="post" action="answer_send.php">
		<input type="hidden" name="phone" value="<?php echo $phone ?>">
		<input type="hidden" value="d" name="choice">
		<input type="hidden" value="<?php echo $row['id'] ?>" name="question_id">
		<input type="hidden" value="<?php echo $row['ans'] ?>" name="ans">
		<button class="choice"><span class="txt"><?php echo $row["d"] ?></span></button>
	</form>
<h4>برعاية: مؤسسة الفلق لخدمات الحاسب الآلي</h4>
</div>
<?php

} else {
    echo " لايوجد بيانات ";
}
$conn->close();

?>


</body>

</html>