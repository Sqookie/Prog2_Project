<?php

	session_unset();
	session_destroy();
	
	die(header("Refresh: 0, index.php?page=home&lang=$curr_lang"));

?>