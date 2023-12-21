<?php require_once("database.php");
if (!isset($_SESSION["login_sess"])) {
  header("location:pages-login.php");
}
$email = $_SESSION["login_email"];
$findresult = mysqli_query($dbc, "SELECT * FROM user WHERE email= '$email'");
if ($res = mysqli_fetch_array($findresult)) {
  $username = $res['username'];
  $fname = $res['fname'];
  $email = $res['email'];
  $role = $res['role'];
  $country = $res['country'];
  $addr = $res['address'];
  $phone = $res['phone'];

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>users-profile</title>
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
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="http://localhost/dropdownTab/pravGit/dbms/index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Unemployment Database Management System</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown"></a>

        <li class="nav-item dropdown">



      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/dropdownTab/pravGit/dbms/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Countries</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <a href="Countries-country-code-&-flags.html">
            <i class="bi bi-circle"></i><span>Country code & flags</span>
          </a>
      </li>
    </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Maps</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="world-map.html">
            <i class="bi bi-circle"></i><span>World map</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="world-table.php">
            <i class="bi bi-circle"></i><span>world-table</span>
          </a>
        </li>
        <li>
          <a href="africa.php">
            <i class="bi bi-circle"></i><span>Africa</span>
          </a>
        </li>
        <li>
          <a href="asia.php">
            <i class="bi bi-circle"></i><span>Asia</span>
          </a>
        </li>
        <li>
          <a href="australia.php">
            <i class="bi bi-circle"></i><span>Australia</span>
          </a>
        </li>
        <li>
          <a href="europe.php">
            <i class="bi bi-circle"></i><span>Europe</span>
          </a>
        </li>
        <li>
          <a href="north-america.php">
            <i class="bi bi-circle"></i><span>North-America</span>
          </a>
        </li>
        <li>
          <a href="south-america.php">
            <i class="bi bi-circle"></i><span>South-America</span>
          </a>
        </li>
        <li>
          <a href="g20.php">
            <i class="bi bi-circle"></i><span>G20</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="Bar-chart.html">
            <i class="bi bi-circle"></i><span>Bar chart</span>
          </a>
        </li>
      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link " href="http://localhost/dropdownTab/pravGit/dbms/users-profile.php">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="pages-register.php">
        <i class="bi bi-card-list"></i>
        <span>Register</span>
      </a>
    </li>End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="http://localhost/dropdownTab/pravGit/dbms/logout.php">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Logout Page Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/dropdownTab/pravGit/dbms/admin.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Admin</span>
        </a>
      </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="unemployment-solutions1.html">
          <i class="ri-search-line"></i>
          <span>Unemployment Solutions</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="FAQ.html">
          <i class="ri-search-line"></i>
          <span>F.A.Q</span>
        </a>
      </li>

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://localhost/dropdownTab/pravGit/dbms/index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
              <?php 
                //echo '<img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">';
                echo '<img src="https://technosmarter.com/assets/icon/user.png">';
               ?>
              <!--<img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">-->
              <h2>
                <?php echo $fname; ?>
              </h2>
              <h3>
                <?php echo $username; ?>
              </h3>

            </div>
          </div>

        </div>

        <div class="col-xl-8">
          <?php require_once("database.php");
          if (!isset($_SESSION["login_sess"])) {
            header("location:http://localhost/dropdownTab/pravGit/dbms/pages-login.php");
          }
          $email = $_SESSION["login_email"];

          ?>
          <?php
          if (isset($_POST['change_password'])) {
            $currentPassword = $_POST['currentPassword'];
            $password = $_POST['password'];
            $passwordConfirm = $_POST['passwordConfirm'];
            $sql = "SELECT password from user where email='$email'";
            $res = mysqli_query($dbc, $sql);
            $res = mysqli_query($dbc, $sql);
            $row = mysqli_fetch_assoc($res);
            if (password_verify($currentPassword, $row['password'])) {
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
              if (!isset($error)) {
                $options = array("cost" => 4);
                $password = password_hash($password, PASSWORD_BCRYPT, $options);

                $result = mysqli_query($dbc, "UPDATE user SET password='$password' WHERE email='$email'");
                if ($result) {
                  echo "<div class='alert alert-success'>Password changed successfuly.</div>";
                  //header("location:http://localhost/dropdownTab/pravGit/dbms/users-profile.php?password_updated=1");
                } else {
                  $error[] = 'Something went wrong';
                }
              }

            } else {
              $error[] = 'Current password does not match.';
            }
          }
          if (isset($error)) {

            foreach ($error as $error) {
              echo "<div class='alert alert-danger'>$error.</div>";
            }
          }
          ?>

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab"
                    data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                    Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label " style="width: 500px; color: black;">Full Name: &ensp;<strong><?php echo $fname; ?></strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" style="width: 500px; color: black;">Job: &ensp;<strong><?php echo $role; ?></strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" style="width: 500px; color: black;">Country: &ensp;<strong><?php echo $country; ?></strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" style="width: 500px; color: black;">Address: &ensp; <strong><?php echo $addr; ?></strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" style="width: 500px; color: black;">Phone: &ensp;<strong><?php echo $phone; ?></strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" style="width: 500px; color: black;">Username: &ensp;<strong><?php echo $username; ?></strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label" style="width: 500px; color: black;">Email: &ensp;<strong><?php echo $email; ?></strong>
                    </div>
                  </div>

                </div>
                <?php require_once("database.php");
                if (!isset($_SESSION["login_sess"])) {
                  header("location:login.php");
                }
                $email = $_SESSION["login_email"];
                $findresult = mysqli_query($dbc, "SELECT * FROM user WHERE email= '$email'");
                if ($res = mysqli_fetch_array($findresult)) {
                  $username = $res['username'];
                  $oldusername = $res['username'];
                  $fname = $res['fname'];
                  $email = $res['email'];
                  $role = $res['role'];
                  $country = $res['country'];
                  $addr = $res['address'];
                  $phone = $res['phone'];

                }
                ?>
                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                  <?php
                  if (isset($_POST['update_profile'])) {
                    $fname = $_POST['fullname'];
                    $country = $_POST['country'];
                    $username = $_POST['username'];
                    $addr = $_POST['address'];
                    $phone = $_POST['phone'];
                    $role = $_POST['role'];
                    


                    $sql = "SELECT * from user where username='$username'";
                    $res = mysqli_query($dbc, $sql);
                    if (mysqli_num_rows($res) > 0) {
                      $row = mysqli_fetch_assoc($res);

                      if ($oldusername != $username) {
                        if ($username == $row['username']) {
                          $error[] = 'Username alredy Exists. Create Unique username';
                        }
                      }
                    }
                    if (!isset($error)) {

                      $result = mysqli_query($dbc, "UPDATE user SET fname='$fname',username='$username', role='$role', country='$country', address='$addr', phone='$phone' WHERE email='$email'");
                      if ($result) {
                        echo "<div class='alert alert-success'>Profile Updated successfuly.</div>";
                       // header("location:http://localhost/dropdownTab/pravGit/dbms/users-profile.php?profile_updated=1");
                      } else {
                        $error[] = 'Something went wrong';
                      }

                    }


                  }
                  if (isset($error)) {

                    foreach ($error as $error) {
                      echo "<div class='alert alert-danger'>$error.</div>";
                    }
                  }


                  ?>
                  <!-- Profile Edit Form -->
                  <form method="post" enctype='multipart/form-data' action="">

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullname" type="text" class="form-control" id="fullName" value="<?php echo $fname;?>" required>
                        
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="Role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="role" type="text" class="form-control" id="Role" value="<?php echo $role;?>" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" value="<?php echo $country;?>" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" value="<?php echo $addr;?>" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" value="<?php echo $phone;?>" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="text" class="form-control" id="username" value="<?php echo $username;?>" required>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="update_profile">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">


                  <!-- Change Password Form -->
                  <form action="" method="POST">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="currentPassword" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="passwordConfirm" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="change_password">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Unemployment Database Management System</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by Ankit & Praveen
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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