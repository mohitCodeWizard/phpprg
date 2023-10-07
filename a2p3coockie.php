<html>
    <body>
        <form>
            <table border="2">
                <tr>
                    <td>
                        Coockie Name:
                    </td>
                    <td>
                        <input type="text" name="txtcoockie">
                    </td>

                </tr>
                <tr>
                    <td colspan="2" align="center"> 
                        <input type="submit" name="btnsub">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>

<?php
    $coockiename = $coockievalue ="";
    if(isset($_GET['btnsub'])){
        $coockiename = "subject_" . $_GET['txtcoockie'];
        $coockievalue = $_GET['txtcoockie'];
        setcookie($coockiename,$coockievalue, time() + 60*60);
    }
?>

<html>
    <body>
        <form>
            <table border="2">
               <tr>
                <td>
                    <select name="s1">

                    <?php
                        foreach($_COOKIE as $n=>$v){
                            echo "<option value=$v>$v</option>";
                        }
                    ?>
                    </select>

                </td>
              
                <td>
                    <input type="submit" value="clear" name="clr">
                </td>
               </tr>
            </table>
        </form>
    </body>
</html>
<?php
    if(isset($_GET['clr'])){
        $c = "subject_" . $_GET['s1'];
        $cv = "";
        setcookie($c,$cv,time()-3600);
        header('location:a2p3coockie.php');
        
    }
?>