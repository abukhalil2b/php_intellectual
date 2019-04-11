<?php

if(isset($_POST['phone'])){
    require_once('./connection.php');
    $phone = $_POST['phone'];
    $his_answer = $_POST['choice']; 
    $ans = $_POST['ans'];
    $question_id = $_POST['question_id'];
    $his_mark=0;
    if($his_answer==$ans)
        $his_mark=1;  
    $sql= "INSERT INTO `user_has_answer` (`id`, `phone`, `question_id`, `his_answer`, `his_mark`)".
    "VALUES (NULL, '$phone', '$question_id', '$his_answer', '$his_mark');";
    if($conn->query($sql))
    header('Location:done.php');
    else
    echo 'problem';


}
 

?>

