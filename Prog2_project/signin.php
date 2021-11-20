<div class="container">

<?php
	/* ===================== SIGN IN ===================== */
	if(isset($_POST['signinbutton']))
	{
		$email = mysqli_real_escape_string($l, filter_var($_POST["email"],FILTER_SANITIZE_SPECIAL_CHARS));
		$password = mysqli_real_escape_string($l, filter_var($_POST["password"],FILTER_SANITIZE_SPECIAL_CHARS));
			
		$better = $password . "-Sqookie233";
		$evenbetter = hash('sha256', $better);
			
		$exists = mysqli_query($l, "SELECT * FROM `user` WHERE `password`='".$evenbetter."' AND `email`='".$email."' AND `status`='verified'");
		$count = mysqli_num_rows($exists);

		if($count == 1)
		{
			$user = mysqli_fetch_array($exists);
			$_SESSION['id'] = $user["id"];
			$_SESSION['name'] = $user["name"];
			$_SESSION['email'] = $user["email"];
			$_SESSION['signedin'] = 'yes';
				
			echo '<meta http-equiv="refresh" content="0; url=index.php?page=weapon_table&lang='. $curr_lang .'">';
		}
		else
		{
			echo '<script>alert("'. $lang['wrong_email_or_password'] .'")</script>';
		}	
	}
?>
	<!-- ===================== SIGN IN FORM ===================== -->
	<div class="row signin-page form">
		<div class="col-md-4" id="signin">
			<h1><?php echo $lang['signin'] ?></h1>
			<form method="post">
				<input class="sign_form_input" type="email" name="email" autofocus placeholder="<?php echo $lang['email'] ?>" required>
				<input class="sign_form_input" type="password" name="password" placeholder="<?php echo $lang['password'] ?>" required>
				<input class="signin_submit" type="submit" name="signinbutton" value="<?php echo $lang['signin'] ?>">
				<p><?php echo $lang['not_signed_up'] ?><a href="index.php?page=signup&lang=<?php echo $curr_lang ?>"><?php echo $lang['sign_up_here'] ?></a></p>
			</form>
		</div>
	</div>
</div>