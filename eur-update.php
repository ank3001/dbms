<?php
include "connect.php";

$rank = $_GET['updaterank'];
$sql2 = "select * from europe where Global_rank=$rank";
$result = mysqli_query($con, $sql2);
$row = mysqli_fetch_assoc($result);
$fcountry = $row['Countries'];
$frate = $row['Unemployment_rate'];
$fdata_av = $row['Available_data'];

if(isset($_POST['submit'])){
    $country = $_POST['country'];
    $rate = $_POST['rate'];
    $data_av = $_POST['data'];

    $sql = "update europe set Global_rank=$rank,Countries='$country',Unemployment_rate=$rate,Available_data='$data_av' where Global_rank=$rank";
    $res = mysqli_query($con, $sql);
    if($res){
        //echo "data updated succesfully";
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
    <input type="text" class="form-control" id="exampleInputEmail1" name="worldrank" value="<?php echo $rank?>">
  </div>
  <div class="mb-3">
    <label class="form-label">country</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="country" value="<?php echo $fcountry?>">
  </div>
  <div class="mb-3">
    <label class="form-label">unemployment rate</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="rate" value="<?php echo $frate?>">
  </div>
  <div class="mb-3">
    <label class="form-label">availabe data</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="data" value="<?php echo $fdata_av?>">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
</body>
</html>