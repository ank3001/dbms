<?php

function access($rank){
    if (isset($_SESSION["ACCESS"]) && !$_SESSION["ACCESS"][$rank]){
        header("location:denied.php");
        die;
    }
}

$_SESSION["ACCESS"]["ADMIN"] = isset($_SESSION["user_type"]) && trim($_SESSION["user_type"]) == "admin";
$_SESSION["ACCESS"]["USER"] = isset($_SESSION["user_type"]) && (trim($_SESSION["user_type"]) == "user" || trim($_SESSION["user_type"]) == "admin");