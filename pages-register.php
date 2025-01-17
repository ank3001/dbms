<!DOCTYPE html>
<?php require_once("database.php"); ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Pages / Register - unemployment database management system</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Unemployment Database Registration</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">
                <?php
                if (isset($_POST['signup'])) {
                  extract($_POST);
                  if (strlen($fname) < 3) { // Minimum 
                    $error[] = 'Please enter First Name using 3 charaters atleast.';
                  }
                  if (strlen($fname) > 20) { // Max 
                    $error[] = 'First Name: Max length 20 Characters Not allowed';
                  }
                  if (!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)) {
                    $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
                  }

                  if (strlen($username) < 3) { // Change Minimum Lenghth   
                    $error[] = 'Please enter Username using 3 charaters atleast.';
                  }
                  if (strlen($username) > 50) { // Change Max Length 
                    $error[] = 'Username : Max length 50 Characters Not allowed';
                  }
                  if (!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)) {
                    $error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg - myusername, okuniqueuser or myusername123';
                  }
                  if (strlen($email) > 50) { // Max 
                    $error[] = 'Email: Max length 50 Characters Not allowed';
                  }
                  if ($passwordConfirm == '') {
                    $error[] = 'Please confirm the password.';
                  }
                  if ($password != $passwordConfirm) {
                    $error[] = 'Passwords do not match.';
                  }
                  if (strlen($password) < 5) { // min 
                    $error[] = 'The password is 6 characters long.';
                  }

                  if (strlen($password) > 20) { // Max 
                    $error[] = 'Password: Max length 20 Characters Not allowed';
                  }
                  $sql = "select * from user where (username='$username' or email='$email');";
                  $res = mysqli_query($dbc, $sql);
                  if (mysqli_num_rows($res) > 0) {
                    $row = mysqli_fetch_assoc($res);

                    if ($username == $row['username']) {
                      $error[] = 'Username already Exists.';
                    }
                    if ($email == $row['email']) {
                      $error[] = 'Email already Exists.';
                    }
                  }
                  if (!isset($error)) {
                    $date = date('Y-m-d');
                    $options = array("cost" => 4);
                    $password = password_hash($password, PASSWORD_BCRYPT, $options);

                    $result = mysqli_query($dbc, "INSERT into user(fname,username,email,password,date) values('$fname','$username','$email','$password','$date')");

                    if ($result) {
                      $done = 2;
                    } else {
                      $error[] = 'Failed : Something went wrong';
                    }
                  }
                } ?>


                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal credentials</p>
                  </div>


                  
                  <?php if (isset($done)) { ?>
                    <?php header("location:pages-login.php");?>
                  <?php } else {?>
                      <?php if(isset($error)){
                        foreach($error as $e){
                          echo $e;
                        }
                      }
                      ?>
                    

                    <form class="row g-3 needs-validation" action="pages-register.php" method="post">

                      <div class="col-12">
                        <label for="FirstName" class="form-label">FullName</label>
                        <div class="input-group has-validation">
                          <input type="text" name="fname" class="form-control" id="yourUsername" required>
                          <div class="invalid-feedback">Please choose a firstname.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                          <input type="text" name="username" class="form-control" id="yourUsername" required>
                          <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="yourEmail" class="form-label">Your Email</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                      </div>

                      <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                      </div>
                      <div class="col-12">
                        <label for="yourPassword" class="form-label">PasswordConfirm</label>
                        <input type="password" name="passwordConfirm" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please confirm your password!</div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit" name="signup">Create Account</button>
                      </div>
                      <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="pages-login.php">Log in</a></p>
                      </div>
                    </form>
                  <?php }?>
                </div>
              </div>

              <div class="credits">

                Designed by Ankit & Praveen
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>