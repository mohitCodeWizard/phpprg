<html>

    <body>
        <script>
                function click(){
                    $_GET['no1']= "_";
                    $_GET['no2']= "_";
                }
            </script>
        <form>
            <?php 
                if (isset($_GET["no1"])){
                    $num1 = $_GET['no1'];
                }
                else{
                    $num1 = "0";  
                }

                if (isset($_GET["no2"])){
                    $num2 = $_GET['no2'];
                }
                else{
                    $num2 = "0";  
                }
                          
            ?>
            

            <lable for="input">NO1:-</lable>
            <input type="number" name ="no1" value = "<?php echo $num2 ?>" onclick = "click()">
            <lable for="input">NO2:-</lable>
            <input type="number" name ="no2" value ="<?php echo $num1 ?>" onclick = "click()" >
            <input type="submit" name ="sumbtn" value="+">
            <input type="submit" name ="subbtn" value="-">
            <input type="submit" name ="mulbtn" value="*">
            <input type="submit" name ="divbtn" value="/">


        </form>
    </body>
</html>

<?php
    
    if (isset($_GET['sumbtn'])){
        $no1 = $_GET["no1"];
        $no2 = $_GET["no2"];
        echo $no1 . "+". $no2 . "=". ($no1 + $no2);
    }
    if (isset($_GET['subbtn'])){
        $no1 = $_GET["no1"];
        $no2 = $_GET["no2"];
        echo $no1 . "-". $no2 . "=". ($no1 - $no2);
    }
    if (isset($_GET['mulbtn'])){
        $no1 = $_GET["no1"];
        $no2 = $_GET["no2"];
        echo $no1 . "*". $no2 . "=". ($no1 * $no2);
    }
    if (isset($_GET['divbtn'])){
        $no1 = $_GET["no1"];
        $no2 = $_GET["no2"];
        echo $no1 . "/". $no2 . "=". ($no1 / $no2);
    }


?>