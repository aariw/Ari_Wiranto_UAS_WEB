<?php
$conn  =  mysqli_connect('localhost','root','',);
$link  =  mysqli_select_db($conn,"web")  or  die(mysqli_error($conn));
?>
