<?php
include('a2p3menu.php');
echo "<br><br>";
session_start();
if(isset($_SESSION['user']))
echo "<br><br>Welcome ".$_SESSION['user']."...";
else
header("location:a2p3login.php");

?>
