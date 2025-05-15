<?php

	include('./home/c/ban.php');
	include('./home/c/geo.php');
	include('./home/lang.php');
	include('./home/c/sys.php');

	header("Location: ./home/?#{$rand}");

	exit();
	
?>