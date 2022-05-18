<?php
include("_includes/config.inc");    
include("_includes/functions.inc");

$connect = mysqli_connect('localhost', 'root', '', 'cw2' );

if(isset($_POST['Submit'])) {

    if(!empty($_POST['sid']) && !empty($_POST['pwd']) && !empty($_POST['dob']) && !empty($_POST['fn']) 
    && !empty($_POST['ln'])  && !empty($_POST['hse']) && !empty($_POST['twn']) && !empty($_POST['cty']) 
    && !empty($_POST['cry']) && !empty($_POST['pc']) && !empty($_FILES['pic'])) {

        $sid = $_POST['sid'];
        $pwd = $_POST['pwd'];
        $dob = $_POST['dob'];
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $h = $_POST['hse'];
        $t = $_POST['twn'];
        $cy = $_POST['cty'];
        $cry = $_POST['cry'];
        $pc = $_POST['pc'];
        $image = $_FILES['pic']['tmp_name']; 

        $password = password_hash($pwd, PASSWORD_DEFAULT);
        $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));

        $sql = "INSERT INTO student(studentid, password, dob, firstname, lastname, house, town, county, country
        , postcode, profilepicture) VALUES ('$sid', '$password', '$dob', '$fn', '$ln', '$h', '$t', '$cy', '$cry', '$pc' 
        , '$imagedata')";

        $result = mysqli_query($connect, $sql) or die(mysqli_error());

        if($result) {

            echo "Data is successfully saved";

        }

        else {

            echo "Error occurred while processing data";
        }

    }

        else {
            echo " There is an empty field please enter data";
        }

}

?>

