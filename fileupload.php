<html>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input type="submit" name="subbtn" />
    </form>
</body>

</html>

<?php
if (isset($_FILES["image"])) {
    $folder = "/images";
    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_type = $_FILES['image']['type'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_extension = explode(".", $_FILES['image']['name']);
    $image_extension = end($image_extension);
    $image_extension = strtolower($image_extension);
    

    $error = array();
    $extensions = array("jpeg","png","jpg");

    if(in_array($image_extension,$extensions) === false){
        $error[] = "extension is not allowed, please choose png,jpg and jpeg image";
    }
    if($image_size > (1024 * 1024 * 2)){
        $error[] = "image size is not allowed, please upload image less than 2MB ";
    }

    if(empty($error) == true){
        move_uploaded_file($image_tmp_name ,"./images/". $image_name);
        echo "success";

    }
    else{

        foreach($error as $value){
            echo "$value <br>";
        }

    }


}
?>