<html>

<head>
    <meta name="Registration">
    <title> Registration Form</title>
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $conn = mysqli_connect("localhost", "root", "", "db1");
        $sql = "select * from regi where id=" . $_GET['id'];
        $res =  mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($res);
    ?>
        <style>
            body {
                background-color: bisque;
            }

            td {
                font-size: 15px;
                font-family: 'Times New Roman';
                color: black;
                padding: 2px;
            }
        </style>



        <center>


            <tr>
                <h2>Edit Form</h2>
            </tr>

            <hr>


            <form>
                <table border="1">
                    <input type="hidden" name="hid" value="<?php echo $row['id']; ?>">
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="fn" value="<?php echo $row['fn']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="ln" value="<?php echo $row['ln']; ?>"></td>
                    </tr>
                    <tr>

                        <td> Email:</td>
                        <td> <input type="email" name="email" value="<?php echo $row['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="pass" value="<?php echo $row['pass']; ?>"></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Co-Password:</td>
                        <td> <input type="password" name="pass" value="<?php echo $row['pass']; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            <textarea rows="3" cols="30" name="addr"><?php echo $row['addr']; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td> <input type="radio" name="r1" value="M" <?php if ($row['male'] == 1) echo "checked"; ?>> Male
                            <input type="radio" name="r1" value="F" <?php if ($row['female'] == 1) echo "checked"; ?>> Female
                        </td>
                    </tr>
                    <tr>
                        <td>Birthdate:</td>
                        <td><input type="date" name="date" value="<?php echo $row['bod']; ?>"> </td>
                    </tr>
                    <tr>
                        <td>Ph.</td>
                        <td><input type="text" name="phone" maxlength="10" value="<?php echo $row['phone'] ?>"></td>
                    </tr>
                    <tr>
                        <td> Subjects:</td>
                        <td><input type="checkbox" name="php" value="1" <?php if ($row['php'] == 1) echo "checked"; ?>>PHP
                            <input type="checkbox" name="unix" value="1" <?php if ($row['unix'] == 1) echo "checked"; ?>>UNIX
                            <input type="checkbox" name="android" value="1" <?php if ($row['android'] == 1) echo "checked"; ?>>Android
                            <input type="checkbox" name="asp.net" value="1" <?php if ($row['asp_net'] == 1) echo "checked"; ?>>ASP.Net
                            <input type="checkbox" name="nt" value="1" <?php if ($row['nt'] == 1) echo "checked"; ?>>NT
                        </td>
                    </tr>
                    <tr>
                        <td>Faculties</td>
                        <td> <select name="dropdown">
                                <option value="select">---select---</option>
                                <option value="Viral Patel" <?php if ($row['faculty'] == 'Viral Patel') echo "selected"; ?>>Viral Patel</option>
                                <option value="Dharani gandhi" <?php if ($row['faculty'] == 'Dharani gandhi') echo "selected"; ?>>Dharani gandhi</option>
                                <option value="Riddhi Patel" <?php if ($row['faculty'] == 'Riddhi Patel') echo "selected"; ?>>Riddhi Patel</option>
                                <option value="Sweety Tamakuwala" <?php if ($row['faculty'] == 'Sweety Tamakuwala') echo "selected"; ?>>Sweety Tamakuwala</option>
                                <option value="Vishwa Desai"><?php if ($row['faculty'] == 'Vishwa Desai') echo "selected"; ?>Vishwa Desai</option>

                            </select>
                        </td>
                    </tr>
                    <tr>

                        <td colspan="2" align="center"><input type="submit" name="upbtn" value="Update"> </td>
                    </tr>
                </table>
            </form>
        <?php
    }
        ?>
        </center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "db1");
        if (isset($_GET["upbtn"])) {
            $id = $_GET["hid"];
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
            $phone = $_GET["phone"];
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
            if (isset($_GET["asp.net"])) {
                $asp = "1";
            } else {
                $asp = "0";
            }
            if (isset($_GET["nt"])) {
                $nt = "1";
            } else {
                $nt = "0";
            }
            $facu = $_GET["dropdown"];

            $sql = "update regi set fn='$fn',ln='$ln',email='$email',pass='$pass',phone=$phone,male=$male,female=$female,bod='$bod',php=$php,android=$android,unix=$unix,nt=$nt,asp_net=$asp,faculty='$facu',addr='$addr' where id =$id";
            mysqli_query($conn, $sql);


            $sql = "select * from regi";
            $res = mysqli_query($conn, $sql);
            echo "<table border = '1'><tr><td><h3><b>Id</b></h3></td><td><h3><b>First Name</b></h3></td><td><h3><b>Last Name</b></h3></td><td><h3><b>Email</b></h3></td><td><h3><b>Pass</b></h3></td><td><h3><b>Phone</b></h3></td>
    <td><h3><b>Male</b></h3></td><td><h3><b>Female</b></h3></td><td><h3><b>BOD</b></h3></td><td><h3><b>Php</b></h3></td><td><h3><b>Android</b></h3></td><td><h3><b>Unix</b></h3></td><td><h3><b>NT</b></h3></td><td><h3><b>ASP.Net</b></h3></td>
    <td><h3><b>Faculty</b></h3></td><td><h3><b>Address</b></h3></td>
    </tr>";
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['fn'] . "</td><td>" . $row['ln'] . "</td><td>" . $row['email'] . "</td><td>" . $row['pass'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['male'] . "</td><td>" . $row['female'] . "</td><td>" . $row['bod'] . "</td><td>" . $row['php'] . "</td>
        <td>" . $row['android'] . "</td><td>" . $row['unix'] . "</td><td>" . $row['nt'] . "</td><td>" . $row['asp_net'] . "</td><td>" . $row['faculty'] . "</td><td>" . $row['addr'] . "</td>
        ";
                echo "<td><a href='a2p2edit.php?id=$row[0]'>edit</a></td>";
                echo "<td><a href='a2p2.delete.php?id=$row[0]'>delete</a></td></tr>";
            }
            echo "</table>";
        }
        ?>
</body>

</html>