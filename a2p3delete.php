<?php

$conn = mysqli_connect("localhost", "root", "", "student");
if (isset($_GET['semail'])) {
    $email = $_GET["semail"];
    $sql = "delete from student where email= '$email'";
    mysqli_query($conn, $sql);
    header('location:a2p3disp.php');
}

?>