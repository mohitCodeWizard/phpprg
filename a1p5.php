<html>

    <body>
        <form method = "post">
            <lable for = "input" >Enter Your name:- </lable>
            <input type = "text" name ="user_name">
            <input type ="submit" name = "sbbtn">
        </form>
    
        <?php

            if(isset($_POST['sbbtn'])){
                $name = $_POST['user_name'];
                echo "wellcome ". $name ."...";
            }
        ?>  
    </body>
</html>
