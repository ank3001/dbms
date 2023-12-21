<?php
include "connect.php";

if(isset($_GET['deleterank'])){
    $rank = $_GET['deleterank'];
    $sql = "delete from g20 where Global_rank=$rank";
    $result = mysqli_query($con, $sql);
    if($result){
        header("location:admin.php");
    }else{
        die(mysqli_error($con));
    }
}

?>