<div class="container">

<?php
    /* =========== SIGN UP WITH SENDGRID EMAIL NOTIFICATION =========== */
    if(isset($_POST["signupbutton"]))
	{
		$name = mysqli_real_escape_string($l, filter_var($_POST["name"],FILTER_SANITIZE_SPECIAL_CHARS));
		$email = mysqli_real_escape_string($l, filter_var($_POST["email"],FILTER_SANITIZE_SPECIAL_CHARS));
		$password1 = mysqli_real_escape_string($l, filter_var($_POST["password1"],FILTER_SANITIZE_SPECIAL_CHARS));
		$password2 = mysqli_real_escape_string($l, filter_var($_POST["password2"],FILTER_SANITIZE_SPECIAL_CHARS));
		$verify_question = mysqli_real_escape_string($l, filter_var($_POST["verify_question"],FILTER_SANITIZE_SPECIAL_CHARS));

		if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
		{
			echo '<script>alert("'. $lang['invalid_email'] .'")</script>'; 
		}
		else if($password1 != $password2)
		{
			echo '<script>alert("'. $lang['password_not_matched'] .'")</script>';
		}
		else if($verify_question != 233)
		{
			echo '<script>alert("'. $lang['wrong_answer'] .'")</script>';
		}
		else
		{
			$exists = mysqli_query($l, "SELECT `email` FROM `user` WHERE `email`='".$email."'");
			
			$count = mysqli_num_rows($exists);
			
			if($count == 0)
			{
				$better = $password1 . '-Sqookie233';
				$evenbetter = hash('sha256', $better);
				
				mysqli_query($l, "INSERT INTO `user` SET 
				`id` = NULL,
				`name` = '".$name."',
				`email` = '".$email."',
				`password` = '".$evenbetter."',
				`date` = '".date("Y-m-d H:i:s")."',
				`status` = 'verified'
				");
			
				echo '<script>alert("'. $lang['successful_registration'] .'")</script>';
				
				/* =========== EMAIL NOTIFICATION =========== */
				$body = $lang['hi'] . '<strong>' . $name . '</strong>' . $lang['comma'] . $lang['log_in_now'];
				$subject = $lang['subject'];

				$headers = array
				(
					'Authorization: Bearer API_key',
					'Content-Type: application/json'
				);
		
				$data = array
				(
					"personalizations" => array
					(
						array
						(
							"to" => array
							(
								array
								(
									"email" => $email,
									"name" => $name
								)
							)
						)
					),
					"from" => array
					(
						"email" => "something@gmail.com"
					),
					"subject" => $subject,
					"content" => array
					(
						array
						(
							"type" => "text/html",
							"value" => $body
						)
					)
				);
		
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
				curl_setopt($ch, CURLOPT_POST,1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$response = curl_exec($ch);
				curl_close($ch);
			}
			else
			{
				echo '<script>alert("'. $lang['email_already_registered'] .'")</script>';
			}
		}
	}
?>

<!-- =========== SIGN UP FORM =========== -->
<div class="row signin-page form">
	<div class="col-md-4" id="signup">
		<h1><?php echo $lang['signup'] ?></h1>
		<form method="post">
			<input class="sign_form_input" tpye="text" name="name" placeholder="<?php echo $lang['username'] ?>" required>
			<input class="sign_form_input" type="email" name="email" placeholder="<?php echo $lang['email'] ?>" required>
			<input class="sign_form_input" type="password" name="password1" placeholder="<?php echo $lang['password'] ?>" required>
			<input class="sign_form_input" type="password" name="password2" placeholder="<?php echo $lang['password_again'] ?>" required>
			<input class="sign_form_input" type="text" name="verify_question" placeholder="123 + 110 = ?" required>
			<input class="signin_submit" type="submit" name="signupbutton" value="<?php echo $lang['signup'] ?>">
			<p><?php echo $lang['signed_up'] ?><a href="index.php?page=signin&lang=<?php echo $curr_lang ?>"><?php echo $lang['sign_in_here'] ?></a></p>
		</form>
	</div>
</div>
</div>