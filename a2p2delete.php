<?php
    $conn = mysqli_connect("localhost", "root", "", "db2");
    if(isset($_GET['id'])){
        $sql= "delete from EMPLOYEE where emp_id ='".$_GET['id']."'";
        mysqli_query($conn,$sql);
        header("location:a2p2disp.php");
    }

?>