<?php
    $conn = mysqli_connect("localhost","root","","db1");
    // if ($conn -> connect_error){

    //     echo "connection error";
    // }
    // echo "connection successfully <br>";

    // $database = "CREATE DATABASE db1";
    // if ($conn -> query($database) == true){
    //     echo "database created successfully";
    // }else{
    //     echo "database not created" . $conn -> error;
    // }
    
    $sql = "create table regi(
            id int AUTO_INCREMENT PRIMARY KEY,
            fn varchar(10),
            ln varchar(10),
            email varchar(30),
            pass varchar(10),
            phone int(10),
            male bit,
            female bit,
            bod date,
            php bit,
            android bit,
            unix bit,
            nt bit,
            asp_net bit,
            faculty varchar(20),
            addr varchar(40)

        )";
   
    mysqli_query($conn,$sql);
    
