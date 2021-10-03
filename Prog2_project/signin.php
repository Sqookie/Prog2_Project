<div class="container">

<?php

    /* Sign up */
    if(isset($_POST["signupbutton"]))
	{
		$name = mysqli_real_escape_string($l, filter_var($_POST["name"],FILTER_SANITIZE_SPECIAL_CHARS));
		$email = mysqli_real_escape_string($l, filter_var($_POST["email"],FILTER_SANITIZE_SPECIAL_CHARS));
		$password1 = mysqli_real_escape_string($l, filter_var($_POST["password1"],FILTER_SANITIZE_SPECIAL_CHARS));
		$password2 = mysqli_real_escape_string($l, filter_var($_POST["password2"],FILTER_SANITIZE_SPECIAL_CHARS));
		
		if($password1 == $password2)
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
			
				echo '<p class="success">Sikeres regisztráció!</p>';

				$name = '';
				$email = '';	
			}
			else
			{
				echo '<p class="error">Ezzel az email címmel már regisztráltak</p>';
			}
		}
		else
		{
			echo "<script>alert('Két jelszó nem egyezik meg!')</script>";
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
			echo '<p class="error">Hibás email cím vagy jelszó!</p>';	
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
			<input tpye="text" name="name" placeholder="<?php echo $lang['username'] ?>" class="form-control" value="<?php echo $name; ?>" required>
			<input type="email" name="email" placeholder="<?php echo $lang['email'] ?>" class="form-control" value="<?php echo $email; ?>" required>
			<input type="password" name="password1" placeholder="<?php echo $lang['password'] ?>" class="form-control" required>
			<input type="password" name="password2" placeholder="<?php echo $lang['password_again'] ?>" class="form-control" required>
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