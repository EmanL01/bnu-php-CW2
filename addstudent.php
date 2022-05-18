<!doctype html>
<html>
<head>

    <title> Add new student</title>
    <body>
        
    <style>

        body {

            background-color: lightblue;
        }


    </style>
</body>

</head>
<body>
    <form action="addstudentdb.php" method="post" enctype="multipart/form-data">

        <label>Student ID:</label><input type="text" name="sid"><br>

        <label>Password:</label><input type="password" name="pwd"><br>

        <label>DOB:</label><input type="date" name="dob"><br>

        <label>Firstname:</label><input type="text" name="fn"><br>

        <label>Lastname:</label><input type="text" name="ln"><br>

        <label>House:</label><input type="text" name="hse"><br>
        
        <label>Town:</label><input type="text" name="twn"><br>
        
        <label>County:</label><input type="text" name="cty"><br>
        
        <label>Country:</label><input type="text" name="cry"><br>
        
        <label>Postcode:</label><input type="text" name="pc"><br>

        <label>Add picture:<label><input type="file" accept="image/jpeg/jpg/png" name="pic" 
        class="form-control"><br>

        <button type="submit" name ="Submit">Submit</button>

    </form>
</body>
</html>



