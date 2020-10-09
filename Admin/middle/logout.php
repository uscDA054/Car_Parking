<?php 
$seen=$_SESSION['admin_login'];

$up="update admin_tb set adm_lastseen='$u_date' where adm_username = '$seen'" ;

if($con->query($up)==TRUE)
{
    $_SESSION['admin_login'] = "";
	$_SESSION['last_seen'] = "";
	session_destroy();
    header("location:Login");

}

?>