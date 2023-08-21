<html>

<head>
    <script>
        function showresult(str) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("disp_area").innerHTML = this.responseText;
                }
            }

            xmlhttp.open("GET", "a2p3search.php?q=" + str, true);
            xmlhttp.send();


        }
    </script>
</head>

<body>

<?php
$txtname = "";
    if(isset($_GET['txtname'])){
        $txtname = $_GET['txtname'];
    }
?>
    <input type='text' size='30' name='txtsearch' onkeyup='showresult(this.value)' value="<?php echo $txtname;  ?>"><br><br>
    <div id='disp_area'></div>
    <?php


    $conn = mysqli_connect("localhost", "root", "", "student");
    $response = "";
    if (isset($_GET['col'])) {
        $response .= "<table border = '2'>";
        $sql = "show columns from student  ";
        $res = mysqli_query($conn, $sql);
        $response .= "<tr>";
        while ($row = mysqli_fetch_array($res)) {
            $response .= "<td><a href='a2p3disp.php?col=$row[Field]'>$row[Field]</a></td>";
        }
        $response .= "</tr>";

        $sql = "select * from student order by " . $_GET['col'];
        $res = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($res)) {
            $response .= "<tr>";
            for ($i = 0; $i < 7; $i++) {
                $response .= "<td>$row[$i]</td>";
            }
            $response .= "<td><a href='a2p3update.php?semail=$row[1]'>Update</a></td>";
            $response .= "<td><a href='a2p3delete.php?semail=$row[1]'>Delete</a></td>";

            $response .= "</tr>";
        }
        $response .= "</table>";
        echo $response;
    }
    ?>

</body>

</html>

<?php
