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
	<link rel="stylesheet" href="css/answer_show.css">
	<title>show question</title>
</head>

<body>
<?php
    require_once('./connection.php');

    require_once('./header.php');
    $sql1 = "SELECT * FROM `questions` order by id desc limit 1";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows > 0) {
        $row = $result1->fetch_assoc();
        $last_question = $row['id'];
    }

    $sql2 = "SELECT * FROM `user_has_answer` WHERE his_mark = 1 AND question_id = $last_question";
    $result2 = $conn->query($sql2);
    
?>

<div class="container">
<table>
<tr>
    <td>اصحاب الاجابات الصحيحة</td>
</tr>
    <?php
        while($row2 = $result2->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row2['phone'];?></td>
    </tr>
    <?php
        }
    ?>
</table>
</div>

<?php

$conn->close();

?>


</body>

</html>