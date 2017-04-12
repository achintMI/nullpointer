<?php
	session_start();
	session_destroy();
	echo "<script>alert('Sussefully Logged off')</script>"
?>