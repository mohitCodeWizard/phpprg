<html>

<body>
    <center>
        <form action="a2p2insert.php">
            <h2> Employee Details </h2>

            <table border="1">

                <tr>
                    <td> Id:</td>
                    <td>
                        <input type="text" name="id">
                    </td>
                </tr>
                <tr>
                    <td> Name:</td>
                    <td>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><input type="radio" name="r1" value="M">Male
                        <input type="radio" name="r1" value="F">Female
                    </td>
                </tr>
                <tr>
                    <td>Hobby:</td>
                    <td>
                        <input type="checkbox" name="music" value="00">Music
                        <input type="checkbox" name="reading" value="01">Reading
                        <input type="checkbox" name="painting" value="10">Painting
                        <input type="checkbox" name="sport" value="11">Sport
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="subbtn">
                    </td>
                </tr>

            </table>
        </form>
    </center>
</body>

</html>