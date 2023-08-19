<?php
// $conn = mysqli_connect("localhost", "root", "");
// $sql = 'create database student';
// mysqli_query($conn, $sql);
// $sql = "create table student(
//             name varchar(20),
//             email varchar(30) primary key,
//             pass varchar(20),
//             phone varchar(10),
//             gender varchar(10),
//             result varchar(5),
//             grade varchar(2)
//     )";
// mysqli_query($conn, $sql);
// echo "success";

$conn = mysqli_connect("localhost", "root", "", "student");
$name = $email = $pass = $copass = $gender = $phone = $result = $grade = "";

if (isset($_GET['subbtn'])) {
    $name = $_GET['sname'];
    $email = $_GET['semail'];
    $pass = $_GET['spass'];
    $copass = $_GET['scopass'];
    $phone = $_GET['sphone'];
    $gender = $_GET['r1'];
    $result = $_GET['re1'];
    $grade = $_GET['g1'];

    if ($pass != $copass) {
        header('location:a2p3form.php');
    }
    $sql = "insert into student values('$name','$email','$pass','$phone','$gender','$result','$grade')";
    mysqli_query($conn, $sql);
    header('location:a2p3disp.php');
}
?>