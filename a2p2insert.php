<?php
$conn = mysqli_connect("localhost", "root", "", "db2");
$id = $name = $gender = $music = $reading = $paint = $sport = "";
if (isset($_GET['subbtn'])) {
        $id = "E";
        $id .= $_GET['id'];
    $name = $_GET['name'];
    if ($_GET['r1'] == "M") {
        $gender = "1";
    } else {
        $gender = "0";
    }
    if (isset($_GET['music'])== "00") {
        $music = "1";
    }else{
        $music = "0";
    }
    if (isset($_GET['reading'])=="01") {
        $reading = "1";
    }else{
        $reading = "0";
    }
    if (isset($_GET['painting'])=="10") {
        $paint = "1";
    }else{
        $paint = "0";
    }
    if (isset($_GET['sport'])=="11") {
        $sport = "1";
    }else{
        $sport = "0";
    }
    $sql = "insert into EMPLOYEE values('$id','$name',$gender,$music,$reading,$paint,$sport)";
    mysqli_query($conn, $sql);
    header('location:a2p2disp.php');
}
