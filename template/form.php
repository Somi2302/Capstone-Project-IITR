<?php
    if(isset($_POST['submit']))
    {   
        $id = $_POST['id'];
        $name = $_POST['cname'];
        $cmpname = $_POST['cmpname'];
        $order = $_POST['otype'];
        $power = $_POST['kwh'];
        $location = $_POST['location'];
        
        //database details. You have created these details in the third step. Use your own.
        $host = "database-3.cyvk3sdc68be.us-east-1.rds.amazonaws.com";
        $username = "admin";
        $password = "admin123";
        $dbname = "Sdb";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO placing_order VALUES ('$id', '$name', '$cmpname', '$order', '$power', '$location')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);
    }
?>