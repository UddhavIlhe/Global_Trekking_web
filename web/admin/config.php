<?php
$conn = mysqli_connect("localhost:3307", "root", "", "travel") or die(mysqli_error($conn));
if($conn)
{
    //echo "Database Connected Sussessfully...........";
}
else
{
    echo "Connection error.....!";
}

?>