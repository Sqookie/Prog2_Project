<?php

	unset($_SESSION['id']);
	unset($_SESSION['name']);
	unset($_SESSION['email']);
	unset($_SESSION['signedin']);

	die(header("Refresh: 0, index.php?page=home&lang=$curr_lang"));

?>