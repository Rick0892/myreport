<?php
session_start();

if (isset($_SESSION['id']) && $_SESSION['login_type']=='staff')
{
	# code...
}
elseif(isset($_SESSION['id']) && $_SESSION['login_type']=='admin')
{
	# code...
}
else
{
	$error = "Session timed out";
	echo "<script>window.location.assign('login?error=$error');</script>";
}

?>
