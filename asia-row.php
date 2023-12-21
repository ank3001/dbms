<?php
include "connect.php";
if(isset($_POST['submit'])){
    $rank = $_POST['worldrank'];
    $country = $_POST['country'];
    $rate = $_POST['rate'];
    $data_av = $_POST['data'];

    $sql = "INSERT into asia(Global_rank,Countries,Unemployment_rate,Available_data ) values('$rank','$country','$rate','$data_av')";
    $res = mysqli_query($con, $sql);
    if($res){
        //echo "data inserted succesfully";
        header("location:admin.php");
    } else{
        die(mysqli_error($con));
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">World rank</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="worldrank">
  </div>
  <div class="mb-3">
    <label class="form-label">country</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="country">
  </div>
  <div class="mb-3">
    <label class="form-label">unemployment rate</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="rate">
  </div>
  <div class="mb-3">
    <label class="form-label">availabe data</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="data">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>