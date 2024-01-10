<?php

$full_name = $_POST ['full_name'];
$your_email = $_POST ['your_email'];
$your_password = $_POST ['your_password'];
$confirm_password = $_POST ['confirm_password'];

if($your_password == $confirm_password)
{
    echo "Matched!";
}
else
{
    echo "Not Matched!";
}

?>