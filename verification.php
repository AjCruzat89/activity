<?php
include('conn.php');
include('login.php');

    

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encpass = md5($password);

   
    $select = mysqli_query($connection, "SELECT * FROM `users` WHERE `username` = '$username'");
    $verification = mysqli_fetch_assoc($select);

    if (!$verification) {
        echo '<script>alert("Incorrect Username!")</script>'; 
        echo '<script>window.location.href = "/activity/login.php"</script>';   
}   elseif ($encpass != $verification['password']) {
        echo '<script>alert("Incorrect Password!")</script>';    
        echo '<script>window.location.href = "/activity/login.php"</script>';   
}   else {
        echo '<script>alert("Successful Login!")</script>';
        echo '<script>window.location.href = "/activity/homepage.php"</script>';
}

                  









}

?>