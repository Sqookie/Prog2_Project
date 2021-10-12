<div class="container">

<?php
    /* Sign up with sendgrid email function*/
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
				
				/* Email notification */
				$body = $lang['hi'] . '<strong>' . $name . '</strong>' . $lang['comma'] . $lang['log_in_now'];
				$subject = $lang['subject'];

				$headers = array(
					'Authorization: Bearer',
					'Content-Type: application/json'
				);
		
				$data = array(
					"personalizations" => array(
						array(
							"to" => array(
								array(
									"email" => $email,
									"name" => $name
								)
							)
						)
					),
					"from" => array(
						"email" => "huangshenqi0622@gmail.com"
					),
					"subject" => $subject,
					"content" => array(
						array(
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

	/* Sign in */
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
				
			echo '<meta http-equiv="refresh" content="0; url=index.php?page=weapon&lang='. $curr_lang .'">';
		}
		else
		{
			echo '<script>alert("'. $lang['wrong_email_or_password'] .'")</script>';
		}	
	}
?>

<div class="row signin-page form">
	<div class="col-md-4" id="signin">
		<h1><?php echo $lang['signin'] ?></h1>
		<form method="post">
			<input type="email" name="email" placeholder="<?php echo $lang['email'] ?>" class="form-control" required>
			<input type="password" name="password" placeholder="<?php echo $lang['password'] ?>" class="form-control" required>
			<input type="submit" name="signinbutton" value="<?php echo $lang['signin'] ?>">
			<p class="message"><?php echo $lang['not_signed_up'] ?><a onclick="show_hide()" href="#"><?php echo $lang['sign_up_here'] ?></a></p>
		</form>
	</div>

	<div class="col-md-4 display_none" id="signup">
		<h1><?php echo $lang['signup'] ?></h1>
		<form method="post">
			<input tpye="text" name="name" placeholder="<?php echo $lang['username'] ?>" class="form-control" required>
			<input type="email" name="email" placeholder="<?php echo $lang['email'] ?>" class="form-control" required>
			<input type="password" name="password1" placeholder="<?php echo $lang['password'] ?>" class="form-control" required>
			<input type="password" name="password2" placeholder="<?php echo $lang['password_again'] ?>" class="form-control" required>
			<input type="text" name="verify_question" placeholder="123 + 110" class="form-control" required>
			<input type="submit" name="signupbutton" value="<?php echo $lang['signup'] ?>">
			<p class="message"><?php echo $lang['signed_up'] ?><a onclick="show_hide()" href="#"><?php echo $lang['sign_in_here'] ?></a></p>
		</form>
	</div>
</div>

<script>
var a
function show_hide()
{
    if(a == 1)
    {
        document.getElementById("signin").style.display="inline";
        document.getElementById("signup").style.display="none";
        return a = 0;
    }
    else
    {
        document.getElementById("signin").style.display="none";
        document.getElementById("signup").style.display="inline";
        return a = 1;
    }
}
</script>
</div>