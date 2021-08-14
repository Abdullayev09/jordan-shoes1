<?php

require "db.php";

		if (isset($_POST['s'])) {
			$username=$_POST['login'];
			$password=$_POST['password'];
			$sql="SELECT * FROM users WHERE Password='$password' and
			Username='$username' ";
			$res=mysqli_query($b, $sql) or die(mysqli_error($b));
			if (mysqli_num_rows($res)>0) {

				header("Location:admin/admin.php");
			}else {
				$error="Login yoki Parol xato";
			}
		}

 ?>

<style>
body{background-color: black ;}

form{
	text-align: center;
	margin-top: 250px;
	color: #fff;
	font-size: 35px;
	border-radius: 50px;
}
input{border-radius: 50px; font-size: 30px;}
</style>

<form action="" method="POST">
 	<!-- <h1>Admin Panel</h1> -->
 		<label>Login kiriting</label>
 		<input type="text" name="login">
		<br><br>
 		<label>Parolni kiriting</label>
 		<input type="password" name="password">
		<br><br>
		<input type="submit" name="s" value="Tasdiqlash">
		<?php if ($error!=' ') {
			echo $error;
		}?>
</form>
