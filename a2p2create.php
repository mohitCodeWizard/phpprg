<?php
// $conn = mysqli_connect("localhost", "root", "");
// $sql = "create database db2";
// mysqli_query($conn, $sql);

$conn = mysqli_connect("localhost", "root", "", "db2");

$sql = "create table EMPLOYEE(
        emp_id varchar(5),
        emp_name varchar(20),
        emp_gender bit(1),
        music bit(1),
        reading bit(1),
        painting bit(1),
        sport bit(1)
)";
mysqli_query($conn, $sql);
echo "success";

?>