<?php
$con = mysqli_connect("localhost", "root", "", "mystore");
if($con==false)
{
    die("connection Error".mysqli_connect_error());
}
?>