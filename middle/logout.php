<?php 
	
    $_SESSION['contact'] = "";
	$_SESSION['id'] = "";
	session_destroy();
	
    header("location:index.php?file=login");

?>