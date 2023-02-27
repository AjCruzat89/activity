<?php
//Connect to main page
include('index.php');
//Connect to database
include('conn.php');                

//When User Clicks Submit <- got from the name=submit in submit
    if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $password = $_POST['password'];  
    $section = $_POST['section']; 
    $encpass = md5($password);
//select query for duplication
    $select = mysqli_query($connection, "SELECT * FROM `users` WHERE username = '".$_POST['username']."'");
    $sqlUsername = mysqli_num_rows($select);
    
    if($sqlUsername > 0) {
        echo '<script>alert("Username Already Exists!")</script>';

    }
    
    else{
        mysqli_query($connection,"INSERT INTO `users`(`name`, `username`, `age`, `password`, `section`) 
        VALUES ('$name','$username','$age','$encpass','$section')") or die('Query Error!');

        echo '<script>alert("Successfully Registered!")</script>';
        echo '<script>window.location.href = "/activity/login.php"</script>';

    }

    }








?>  
