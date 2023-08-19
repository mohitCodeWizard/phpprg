<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$semail = $_GET['semail'];
if (isset($_GET['semail'])) {
    $sql = "select * from student where email='$semail'";
    // print_r($sql);
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);    
}
?>


<html>

<head>
    <title>
        Update
    </title>
</head>

<body>
    <center>
        <form>
            <b>
                <h2>Update</h2>
            </b>
            </br>

            <table border="1">
                <tr>
                    <td>
                        Student Name:
                    </td>
                    <td>
                        <input type="text" name="sname" value="<?php echo $row[0]; ?>">

                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" name="semail" value="<?php echo $row[1]; ?>">

                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="text" name="spass" value="<?php echo $row[2]; ?>">

                    </td>
                </tr>
                <tr>
                    <td>
                        Phone:
                    </td>
                    <td>
                        <input type="text" name="sphone" value="<?php echo $row[3]; ?>">

                    </td>
                </tr>
                <tr>
                    <td>
                        Gender:
                    </td>
                    <td>
                        <input type="radio" name="r1" value="Male" <?php if ($row[4] == 'Male') echo "checked"; ?>>Male
                        <input type="radio" name="r1" value="Female" <?php if ($row[4] == 'Female') echo "checked"; ?>>Female

                    </td>
                </tr>

                <tr>
                    <td>
                        Result:
                    </td>
                    <td>
                        <input type="radio" name="re1" value="Pass" <?php if ($row[5] == 'Pass') echo "checked"; ?>>Pass
                        <input type="radio" name="re1" value="Fail" <?php if ($row[5] == 'Fail') echo "checked"; ?>>Fail

                    </td>
                </tr>
                <tr>
                    <td>
                        Grade:
                    </td>
                    <td>
                        <input type="radio" name="g1" value="A" <?php if ($row[6] == 'A') echo "checked"; ?>>A
                        <input type="radio" name="g1" value="B" <?php if ($row[6] == 'B') echo "checked"; ?>>B
                        <input type="radio" name="g1" value="C" <?php if ($row[6] == 'C') echo "checked"; ?>>C
                        <input type="radio" name="g1" value="D" <?php if ($row[6] == 'D') echo "checked"; ?>>D
                        <input type="radio" name="g1" value="E" <?php if ($row[6] == 'E') echo "checked"; ?>>E

                    </td>
                </tr>
                <tr>

                    <td colspan="2" align="center">
                        <input type="submit" name="upbtn" value="Update">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "student");
$name = $email = $pass =  $gender = $phone = $result = $grade = "";

if (isset($_GET['upbtn'])) {

    $name = $_GET["sname"];
    $email = $_GET["semail"];
    $pass = $_GET['spass'];
    $gender = $_GET['r1'];
    $phone = $_GET['sphone'];
    $result = $_GET['re1'];
    $grade = $_GET['g1'];
    $sql = "update student set name ='$name',email='$email',pass='$pass',phone='$phone',gender='$gender',result='$result',grade='$grade' where email = '$semail'";
    mysqli_query($conn, $sql);
    print_r($sql);
    header('location:a2p3disp.php');
    mysqli_close($conn);
}

?>