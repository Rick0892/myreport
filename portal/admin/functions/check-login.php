<?php

if (isset($_SESSION['id']) && $_SESSION['login_type']=='schooladmin')
{
	# code...
}
else
{
	$error = "Session timed out";
	echo "<script>window.location.assign('../../login?error=$error');</script>";
}

?>
