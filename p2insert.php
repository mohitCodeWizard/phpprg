<?php
$conn = mysqli_connect("localhost", "root", "", "db1");
if (isset($_GET["sbbtn"])) {

    $fn = $_GET["fn"];
    $ln = $_GET["ln"];
    $email = $_GET["email"];
    $pass = $_GET["pass"];
    $addr = $_GET["addr"];
    if ($_GET["r1"] == "M") {
        $male = "1";
    } else {
        $male = "0";
    }
    if ($_GET["r1"] == "F") {
        $female = "1";
    } else {
        $female = "0";
    }
    $bod = $_GET["date"];
    $ph = $_GET["phone"];
    if (isset($_GET["php"])) {
        $php = "1";
    } else {
        $php = "0";
    }
    if (isset($_GET["unix"])) {
        $unix = "1";
    } else {
        $unix = "0";
    }

    if (isset($_GET["android"])) {
        $android = "1";
    } else {
        $android = "0";
    }
    echo $_GET["asp.net"];
    echo $_GET["unix"];
    if(isset($_GET["asp.net"])){
        $asp = "1";
    }else{
        $asp = "0";
    }
    if (isset($_GET["nt"])) {
        $nt = "1";
    } else {
        $nt = "0";
    }
    $facu = $_GET["dropdown"];


    $insert = "insert into regi(fn,ln,email,pass,phone,male,female,bod,php,android,unix,nt,asp_net,faculty,addr) values('$fn','$ln','$email','$pass',$ph,$male,$female,'$bod',$php,$android,$unix,$nt,$asp,'$facu','$addr')";
    // mysqli_query($conn,$insert);
}

$sql = "select * from regi";
$res = mysqli_query($conn,$sql);
echo "<table border = '1'><tr><td><h3><b>Id</b></h3></td><td><h3><b>First Name</b></h3></td><td><h3><b>Last Name</b></h3></td><td><h3><b>Email</b></h3></td><td><h3><b>Pass</b></h3></td><td><h3><b>Phone</b></h3></td>
    <td><h3><b>Male</b></h3></td><td><h3><b>Female</b></h3></td><td><h3><b>BOD</b></h3></td><td><h3><b>Php</b></h3></td><td><h3><b>Android</b></h3></td><td><h3><b>Unix</b></h3></td><td><h3><b>NT</b></h3></td><td><h3><b>ASP.Net</b></h3></td>
    <td><h3><b>Faculty</b></h3></td><td><h3><b>Address</b></h3></td>
    </tr>";
while ($row = mysqli_fetch_array($res)) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['fn'] . "</td><td>" . $row['ln'] . "</td><td>" . $row['email'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['male'] . "</td><td>" . $row['female'] . "</td><td>" . $row['bod'] . "</td><td>" . $row['php'] . "</td>
        <td>" . $row['android'] . "</td><td>" . $row['unix'] . "</td><td>" . $row['nt'] . "</td><td>" . $row['asp_net'] . "</td><td>" . $row['faculty'] . "</td><td>" . $row['addr'] . "</td>
        ";
    echo "<td><a href='a2p2edit.php?id=$row[0]'>edit</a></td>";
    echo "<td><a href='a2p2delete.php?id=$row[0]'>delete</a></td></tr>";
}
echo "</table>";
 