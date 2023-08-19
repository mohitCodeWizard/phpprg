<?php

// $con = mysqli_connect("localhost","root","");
// $sql = "create database db2";
// mysqli_query($con,$sql);

$conn = mysqli_connect("localhost", "root", "", "db2");
//----- table created -------
// $sql = "create table emp(
//             id int AUTO_INCREMENT primary key,
//             ename varchar(10),
//             ephone bigint,
//             esalary bigint
//         )";
// mysqli_query($conn, $sql);

//------edit--------
$conn = mysqli_connect("localhost", "root", "", "db2");
$name = $phone = $salary = "";
if (isset($_GET['ln']) && $_GET['ln'] == 1) {
    $sql = "select * from emp where id = " . $_GET['eid'] . "";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    $name = $row["ename"];
    $phone = $row["ephone"];
    $salary = $row["esalary"];
}
if(isset($_GET["upbtn"])){
    $name = $_GET["ename"];
    $phone = $_GET["ephone"];
    $salary = $_GET["esalary"];
    $sql = "update emp set ename= '$name',ephone=$phone,esalary=$salary where id= ". $_GET["temp"];
    mysqli_query($conn,$sql);
}
//-------delete -------

if(isset($_GET["ln"]) && $_GET["ln"]==2){
    $sql = "delete from emp where id=". $_GET["eid"];
    mysqli_query($conn,$sql);
}



// -------inserting-------
$ename = $esalary = $ephone = "";
if (isset($_GET["sbbtn"])) {
    $empname = $_GET["ename"];
    $empphone = (int)$_GET["ephone"];
    $empsalary = (int)$_GET["esalary"];

    $sql = "insert into emp (ename,ephone,esalary) values('$empname',$empphone,$empsalary)";
    mysqli_query($conn, $sql);
}

//-------display---------
function display(){
    $conn = mysqli_connect("localhost", "root", "", "db2");
    $sql = "select * from emp";
    $res = mysqli_query($conn, $sql);
    echo "<table border ='1'> <tr><td><h3>EName</h3></td><td><h3>EPhone</h3></td><td><h3>ESalary</h3></td></tr>";
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr><td>" . $row["ename"] . "</td><td>" . $row["ephone"] . "</td><td>" . $row["esalary"] . "</td>";
        echo "<td> <a href = 'a2p1.php?eid=".$row['id']."&ln=1'>edit</a></td>";
        echo "<td> <a href = 'a2p1.php?eid=".$row['id']."&ln=2'>Delete</a></td></tr>";
    }
    echo "</table>"; 
}
display();

?>


<html>

<body>
    <center>
        <table border="1">
            <form>
                <tr>
                    <td align="center" colspan="2">Employee Details</td>
                </tr>
                <tr>
                    <td>EName:-</td>
                    <td>
                        <input type="text" name="ename" value="<?php echo $name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>EPhone:-</td>
                    <td><input type="text" name="ephone" maxlength="10" value="<?php echo $phone; ?>"></td>
                </tr>
                <tr>
                    <td>ESalary:-</td>
                    <td>
                        <input type="number" name="esalary" value="<?php echo $salary; ?>">
                    </td>
                </tr>
                <?php if (isset($_GET['ln']) && $_GET['ln'] == 1) { ?>
                    <tr>
                        <input type="hidden" name = "temp" value = "<?php echo $_GET["eid"]; ?>">
                        <td colspan="2" align="center"><input type="submit" name="upbtn" value="Update"></td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="sbbtn" value="Submit"></td>
                    </tr>
                <?php } ?>
                
            </form>
        </table>
    </center>
</body>

</html>

<?
// search
?>
<html>
    <head>
        <script>
            function showResult(str){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        document.getElementById('disp_area').innerHTML = this.responseText;
                    }
                }
                xmlhttp.open("GET","livesearch.php?q=" + str,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <input type="text" size ='30' onkeyup="showResult(this.value)"><br><br>
        <div id = "disp_area">Display Data here</div>

    </body>
</html>