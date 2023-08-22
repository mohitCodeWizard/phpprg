<?php
session_start();
include('a2p3menu.php');
echo "<br><br>";
$conn = mysqli_connect("localhost","root","","student");
    if(isset($_SESSION['user']) && isset($_SESSION['email'])){
        $sql = "select result from student where email = '" .$_SESSION['email'] . " ' ";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($res);
        if($row['result']== "Pass"){
            echo "Congratulation " . $_SESSION['user'] . " you are " . $row['result'];
        }
        else{
            echo "Try Again " . $_SESSION['user'] . " you are ". $row['result'];
        }
    }
    else{
        header('location:a2p3login.php');
    }
?>