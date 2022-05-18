<?php
include("_includes/config.inc");
include("_includes/functions.inc");

$connect = mysqli_connect('localhost', 'root', '', 'cw2' );

if(isset($_POST['del'])) {

    foreach($_POST ['check'] as $value) {

        $sql = "DELETE FROM student WHERE studentid = '$value'"; 
        $result = mysqli_query($connect, $sql); 

    }

}

?>

<body>
    <style>

        body {

            background-color: lightblue;
        }


    </style>
</body>

<script

src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"

></script>

<script>
    $(document).ready (function() {

        $("#form1 #select-all"). click(function() {

            $("#form1 input[type='checkbox']").prop('checked', this.checked);

        });
});

</script>

<form id = "form1" method = "POST">
    <table border = "1" cellpadding = "5" cellspacing = "0">
        <th><input type = "checkbox" id = "select-all" /></th>
        <th>Student ID</th>
        <th>Password</th>
        <th>DOB</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>House</th>
        <th>Town</th>
        <th>County</th>
        <th>Country</th>
        <th>Postcode</th>

        <?php
        
        $sql = 'SELECT * FROM student';
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($result)){
            
            $sid = $row['studentid'];
            $pw = $row['password'];
            $dob = $row['dob'];
            $fn = $row['firstname'];
            $ln = $row['lastname'];
            $h = $row['house'];
            $t = $row['town'];
            $cy = $row['county'];
            $cry = $row['country'];
            $pc = $row['postcode'];
   
            echo "<tr> <td> <input type='checkbox' name='check[]' value='$sid'/> </td> 
            <td>$sid</td> <td>$pw</td> <td>$dob</td> <td>$fn</td> <td>$ln</td> <td>$h</td> <td>$t</td> 
            <td>$cy</td>
            <td>$cry</td> <td>$pc</td></tr>";

        }
        
        ?>

    </table>
    </p>
    <input type="SUBMIT" name='del' value="Delete Record" />
</form>
