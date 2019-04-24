<?php
session_start();
function __autoload($class)
{
  require_once "connection/$class.php";
}
 ?>
<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>portal</title>

    <!-- Favicon -->
    <link rel="icon" href="img/custom/logo1.jp">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">