<?php

	session_unset();
	session_destroy();

	echo '<meta http-equiv="refresh" content="0; url=index.php?page=home&lang='. "$curr_lang" .'">';

?>