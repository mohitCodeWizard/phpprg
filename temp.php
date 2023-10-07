<?php
    $conn = mysqli_connect("localhost","root","","prac");
   if(isset($_GET['val']))
   {
	$sql = "select * from product where id=".$_GET['val'];
	$res = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($res);
	
   }
   if(isset($_GET['upbtn']))
   {
	
	$id = $_GET['uid'];
	$un = $_GET['uname'];
	$pc = $_GET['price'];

	$sql = "update product set uname='$un', price='$pc' where id=$id";
	mysqli_query($conn,$sql);
	header('location:display.php');
   }

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
       <input type="hidden" name="uid" value="<?php echo $row[0]; ?>" readonly>
        <tr>
            <td> Name : <input type="text" name="uname" value="<?php echo $row[1]; ?>"></td><br>
        </tr>
        <tr>
            <td> Price:  <input type="text" name="price" value="<?php echo $row[2]; ?>"></td><br>
        </tr>
        <tr>
            <td> <input type="submit" name="upbtn" value="update"></td><br>
        </tr>
        <tr>
	<a href='display.php'> Display</a><br>
        </tr>
    </form>
</body>
</html>