<?php

$conn = mysqli_connect("localhost", "root", "", "db2");
if (isset($_GET['id'])) {
    $sql = "select * from employee where emp_id = '" . $_GET['id'] . "'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
}
?>
<html>

<body>
    <center>
        <form>
            <!-- <h2> Employee Details </h2> -->

            <table border="1">
            <input type="hidden" name = "hide" value="<?php echo $row[0]; ?>">
                <tr>
                    <td> Id:</td>
                    <td>
                        
                        <input type="text" name="id" value="<?php echo $row[0]; ?>">
                    </td>
                </tr>
                <tr>
                    <td> Name:</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $row[1]; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="r1" value="M" <?php if ($row[2] == 1) echo "checked"; ?>>Male
                        <input type="radio" name="r1" value="F" <?php if ($row[2] == 0) echo "checked"; ?>>Female
                    </td>
                </tr>
                <tr>
                    <td>Hobby:</td>
                    <td>
                        <input type="checkbox" name="music" value="00" <?php if ($row['music'] == 1) echo "checked"; ?>>Music
                        <input type="checkbox" name="reading" value="01" <?php if ($row['reading'] == 1) echo "checked"; ?>>Reading
                        <input type="checkbox" name="painting" value="10" <?php if ($row['painting'] == 1) echo "checked"; ?>>Painting
                        <input type="checkbox" name="sport" value="11" <?php if ($row['sport'] == 1) echo "checked"; ?>>Sport
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="upbtn" value="Update">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "db2");
$id = $name = $gender = $music = $reading = $paint = $sport = "";
if (isset($_GET['upbtn'])) {
    $id = $_GET['id'];
    $name = $_GET['name'];
    if ($_GET['r1'] == "M") {
        $gender = "1";
    } else {
        $gender = "0";
    }
    if (isset($_GET['music']) == "00") {
        $music = "1";
    } else {
        $music = "0";
    }
    if (isset($_GET['reading']) == "01") {
        $reading = "1";
    } else {
        $reading = "0";
    }
    if (isset($_GET['painting']) == "10") {
        $paint = "1";
    } else {
        $paint = "0";
    }
    if (isset($_GET['sport']) == "11") {
        $sport = "1";
    } else {
        $sport = "0";
    }
    $sql = "update EMPLOYEE set emp_id='".$id."',emp_name='".$name."',emp_gender=".$gender.",music=".$music.",reading=".$reading.",painting=".$paint.",sport=".$sport." where emp_id='".$_GET['hide']."'";
    mysqli_query($conn, $sql);
    header('location:a2p2disp.php');
}
