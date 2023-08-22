<html>

<head>
    <title>
        Login
    </title>

</head>

<body>
    <center>
        <form>
            <b>
                <h3> Login Page</h3>
            </b>
            <table border="2" >
                <tr>
                    <td>
                        Email:
                    </td>
                    <td >
                        <input type="text" name="txtemail">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="text" name="pass">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="subbtn" value="Login">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        you have dont account <a href='a2p3form.php'>Singup</a>
                    </td>
                </tr>
            </table>
        </form>

    </center>
</body>

</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "student");
session_start();
if (isset($_SESSION['user'])) {
    header('location:a2p3home.php');
}

if (isset($_GET['subbtn'])) {

    $user = $_GET['txtemail'];
    $pass  = $_GET['pass'];
    $sql = "select * from student where email='$user' and pass = '$pass'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) >= 1) {
        $row = mysqli_fetch_array($res);
        $_SESSION['user'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header('location:a2p3home.php');
    }
    else{
        echo " Try Again..!";   
    }
}


?>