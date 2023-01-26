<?php

$con = new mysqli('localhost', 'root', '', 'unemp1');
if(!$con){
    die(mysqli_error($con));
}

?>