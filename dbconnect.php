<?php

$con = mysqli_connect("localhost","root","","bloodstreamdb");
mysqli_select_db($con,'bloodstreamdb');
if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
?>