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
	<title>register</title>
</head>
<body>
<?php
    require_once('./connection.php');
    require_once('./header.php')
?>
<div class="container">
    <form method="POST" action="check_register.php">
        <input  placeholder="الاسم" class="form-control" name="first_name"  required >
        <input  placeholder="القبيلة" class="form-control" name="last_name"  required >
        <input  placeholder="الولاية" class="form-control" name="wilaya"  required >
        <input  type="number"  placeholder="الهاتف" class="form-control" name="phone"  required >
        <input  type="number" placeholder="كلمة المرور" class="form-control" name="password" required>
        <button type="submit" class="btn-login">
        تسجيل جديد
        </button>
    </form>
    <h4>برعاية: مؤسسة الفلق لخدمات الحاسب الآلي</h4>
    
</div>

</body>
</html>