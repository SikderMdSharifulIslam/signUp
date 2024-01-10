<?php

//header
include 'includes/header.php';
include 'includes/navbar.php';

// Database connect
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database_name = "sign_up";
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE_NAME", "sign_up");
$db_connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);


$full_name = $_POST ['full_name'];
$your_email = $_POST ['your_email'];
$your_password = $_POST ['your_password'];
$confirm_password = $_POST ['confirm_password'];

if($your_password == $confirm_password)
{
    $insert_query = "INSERT INTO users(full_name, email_address, password) VALUES ('$full_name','$your_email','$your_password');";
    mysqli_query($db_connect,$insert_query);
    header("location: login.php");
}
else
{
    echo "Not Matched!";
}

//footer
include 'includes/footer.php';

?>