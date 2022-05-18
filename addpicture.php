<?php 

include("_includes/config.inc");    
include("_includes/functions.inc");

$connect = mysqli_connect('localhost', 'root', '', 'cw2' );

if (isset($_POST['Submit'])) {

    $pic = $_FILES['pic'];

    $imgName = $_FILES['pic']['name'];
    $imgTmpname = $_FILES['pic']['tmp_name'];
    $imgSize = $_FILES['pic']['size'];
    $imgError = $_FILES['pic']['error'];
    $imgType = $_FILES['pic']['type'];

    $imgext = explode('.', $imgName);
    $imgaccext = strtolower(end($imgext));

    $granted = array('jpg', 'jpeg', 'png');

    if(in_array($imgaccext, $granted)) {

        if($imgError === 0) {

            if($imgSize < 1000000) {

                $sql = "INSERT INTO student(profilepicture) 
                VALUES('$imgName')";
				mysqli_query($connect, $sql);

            } else {

                echo "The attempted upload image is too large!";
            }

        } else {

            echo "Error occured while attempting to upload the image";

        }


    } else {

        echo "The attempted upload image is not supported!";
    }


}
?>