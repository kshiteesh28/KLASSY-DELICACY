<?php
$connection = mysqli_connect("localhost","root","","canteen");

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>