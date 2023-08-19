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

            xmlhttp.open("GET", "a2p3disp.php?q=" + str, true);
            xmlhttp.send();


        }
    </script>
</head>

<body>
    <?php
    if(isset($_GET["txtsearch"])!= ""){
        echo "<div id='disp_area'></div>";
    }
    else{
        echo "<input type='text' size = '30' name = 'txtsearch' onkeyup='showresult(this.value)'><br><br>";
        echo "<div id='disp_area'></div>";
    }

    ?>

</body>

</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "student");
$response = "";
if(isset($_GET['q'])){
    $response .= "<table border = '2'>";
    $sql = 'show columns from student';
    $res = mysqli_query($conn, $sql);
    
    $response .= "<tr>";
    while ($row = mysqli_fetch_array($res)) {
        $response .= "<td><a href='a2p3disp.php?col=$row[Field]'>$row[Field]</a></td>";
    }
    $response .= "</tr>";
    $str =$_GET['q'];
    
    if ($str != "") {
        $sql = "select * from student where
            name like '%$str%' or email like '%$str%' or pass like '%$str%' or
            phone like '%$str%' or gender like '%$str%'";
    } 
    else {
        $sql = "select * from student";
    }
    
    if (isset($_GET['col'])) {
        $sql = $sql . " order by " . $_GET['col'];
    }
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