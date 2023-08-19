<html>

    <body>

        <form>
            <lable for="input">NO1:-</lable>
            <input type="number" name ="no1" value = "0">
            <lable for="input">NO2:-</lable>
            <input type="number" name ="no2" value ="0">
            <input type="submit" name ="sumbtn" value="Sum">

        </form>
    </body>
</html>

<?php

    if (isset($_GET['sumbtn'])){
        $no1 = $_GET["no1"];
        $no2 = $_GET["no2"];
        echo $no1 . "+". $no2 . "=". ($no1 + $no2);
    }
?>