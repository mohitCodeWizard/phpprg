<html>

<head>
    <meta name ="Registration">
    <title> Registration Form</title>
</head>

<body>
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

        <table border="0">
            <tr>
                <h2>Registration</h2>
            </tr>
            
            <hr>
            <form action="p2insert.php">
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="fn" ></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="ln" ></td>
                </tr>
                <tr>

                    <td> Email:</td>
                    <td> <input type="email" name="email" placeholder="abc@gmail.com" ></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="pass" ></td>
                </tr>
                <br>
                <tr>
                    <td>Co-Password:</td>
                    <td> <input type="password" name="pass" > </td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>
                        <textarea rows="3" cols="30" name="addr" placeholder="Current Address" ></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td> <input type="radio" name="r1" value="M" checked> Male
                        <input type="radio" name="r1" value="F"> Female
                    </td>
                </tr>
                <tr>
                    <td>Birthdate:</td>
                    <td><input type="date" name="date" ></td>
                </tr>
                <tr>
                    <td>Ph.</td>
                    <td><input type="text" name="phone" maxlength="10" ></td>
                </tr>
                <tr>
                    <td> Subjects:</td>
                    <td><input type="checkbox" name="php" value="PHP">PHP
                        <input type="checkbox" name="unix" value="UNIX">UNIX
                        <input type="checkbox" name="android" value="Android">Android
                        <input type="checkbox" name="asp.net" value="ASP.Net">ASP.Net
                        <input type="checkbox" name="nt" value="NT" >NT
                    </td>
                </tr>
                <tr>
                    <td>Faculties</td>
                    <td> <select name="dropdown">
                            <option value="select">---select---</option>
                            <option value="Viral Patel">Viral Patel</option>
                            <option value="Dharani gandhi">Dharani gandhi</option>
                            <option value="Riddhi Patel">Riddhi Patel</option>
                            <option value="Sweety Tamakuwala">Sweety Tamakuwala</option>
                            <option value="Vishwa Desai">Vishwa Desai</option>

                        </select>
                    </td>
                </tr>
                <tr>

                    <td colspan="2" align="center"><input type="submit" name="sbbtn"> </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>


