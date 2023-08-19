<html>

<head>
    <title>
        Student Registration
    </title>
</head>

<body>
    <center>
        <form action="a2p3insert.php">
            <b>
                <h2>Registration</h2>
            </b>
            </br>

            <table border="1">
                <tr>
                    <td>
                        Student Name:
                    </td>
                    <td>
                        <input type="text" name="sname">

                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" name="semail" required>

                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="text" name="spass" required>

                    </td>
                </tr>
                <tr>
                    <td>
                        Co-Password:
                    </td>
                    <td>
                        <input type="text" name="scopass" required>

                    </td>
                </tr>
                <tr>
                    <td>
                        Phone:
                    </td>
                    <td>
                        <input type="text" name="sphone" required>

                    </td>
                </tr>
                <tr>
                    <td>
                        Gender:
                    </td>
                    <td>
                        <input type="radio" name="r1" value="Male">Male
                        <input type="radio" name="r1" value="Female">Female

                    </td>
                </tr>

                <tr>
                    <td>
                        Result:
                    </td>
                    <td>
                        <input type="radio" name="re1" value="Pass">Pass
                        <input type="radio" name="re1" value="Fail">Fail

                    </td>
                </tr>
                <tr>
                    <td>
                        Grade:
                    </td>
                    <td>
                        <input type="radio" name="g1" value="A">A
                        <input type="radio" name="g1" value="B">B
                        <input type="radio" name="g1" value="C">C
                        <input type="radio" name="g1" value="D">D
                        <input type="radio" name="g1" value="E">E

                    </td>
                </tr>
                <tr>

                    <td colspan="2" align="center">
                        <input type="submit" name="subbtn" value="Submit">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>