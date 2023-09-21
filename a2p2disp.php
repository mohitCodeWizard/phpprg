<?php
    $conn = mysqli_connect("localhost","root","","db2");

    echo "<table border = '1'><tr align= 'center'>";

    echo "<td><h3>ID</h3></td><td><h3>Name</h3></td><td><h3>Gender</h3></td><td><h3>Hoddie</h3></td>";
    echo "</tr>";
    //show data
    $sql = "select * from EMPLOYEE";
    $res = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($res)){
        $gender = $hobbie= "";
        if($row[2] == 1){
            $gender = "Male";
        }
        else{
            $gender = "Female";
        }
        if($row[3] == 1){
            $hobbie .= "Music,";
        }
        if($row[4] == 1){
            $hobbie .= "reading,";
        }
        if($row[5] == 1){
            $hobbie .= "painting,";
        }
        if($row[6] == 1){
            $hobbie .= "sport";
        }
        
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$gender."</td><td>". $hobbie ."</td>";
        echo "<td><a href='a2p2edit.php?id=$row[0]'>edit</a></td>";
        echo "<td><a href='a2p2delete.php?id=$row[0]'>delete</a></td>"; 
        
        echo "</tr>";
    }
    echo "<a href='a2p2form.php'>Insert</a>";
    echo "</table>";
    ?>