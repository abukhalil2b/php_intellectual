<?php
session_start();
if(!isset($_SESSION['user']))
	header('Location:login.php');
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/index.css">
	<title>Document</title>
</head>

<body>

	<?php
		require_once('./connection.php');
	?>
	<div class="upper-nav">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<a href="logout.php"  class="btn header-btn-outline logout"> خروج </a>
				</div>
			</div>
		</div>
	</div>
 
	<div class="body">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-3">
					<form method="post" action="task_add_check.php">
						<div class="task-card">
							<div class="task-card-up">
								<input name="task_period" class="form-control">
							</div>
							<div class="task-card-dn task-card-head">
								<input name="the_past_task" class="form-control">
								<input name="the_now_task" class="form-control">
								<button class="btn header-btn-outline" > حفظ </button>
							</div>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>
	<!-- .body -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12 ">
					
				</div>
			</div>
		</div>
	</div>
</body>

</html>