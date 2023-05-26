<?php

error_reporting();
$conn=mysqli_connect("localhost","root");
//echo(($conn)?"add":"Not add");
$da=mysqli_select_db($conn,"e_classroom");
//echo(($da)?"add":"Not add");
?>