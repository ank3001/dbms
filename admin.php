<?php include "database.php";

include "access.php";
access('ADMIN');
?>
<?php

function connect()
{
    $mysqli = new mysqli('localhost', 'root', '', 'unemp1');
    if ($mysqli->connect_errno != 0) {
        return $mysqli->connect_error;
    } else {
        $mysqli->set_charset("utf8mb4");
    }
    return $mysqli;
}

function getTables()
{
    $mysqli = connect();
    $res = $mysqli->query("SELECT * FROM g20 ");
    while ($row = $res->fetch_assoc()) {
        $tables[] = $row;
    }
    return $tables;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Unemployment Database Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

    

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="http://localhost/dropdownTab/pravGit/dbms/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Countries</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
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
            <a href="admin-wt.php">
              <i class="bi bi-circle"></i><span>world-table</span>
            </a>
          </li>
          <li>
            <a href="admin-afr.php">
              <i class="bi bi-circle"></i><span>Africa</span>
            </a>
          </li>
          <li>
            <a href="admin-asia.php">
              <i class="bi bi-circle"></i><span>Asia</span>
            </a>
          </li>
          <li>
            <a href="admin-aus.php">
              <i class="bi bi-circle"></i><span>Australia</span>
            </a>
          </li>
          <li>
            <a href="admin-eur.php">
              <i class="bi bi-circle"></i><span>Europe</span>
            </a>
          </li>
          <li>
            <a href="admin-na.php">
              <i class="bi bi-circle"></i><span>North-America</span>
            </a>
          </li>
          <li>
            <a href="admin-sa.php">
              <i class="bi bi-circle"></i><span>South-America</span>
            </a>
          </li>
          <li>
            <a href="admin-g20.php">
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
        <a class="nav-link collapsed" href="http://localhost/dropdownTab/pravGit/dbms/users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/dropdownTab/pravGit/dbms/logout.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->
     
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="http://localhost/dropdownTab/pravGit/dbms/index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <section id="hero">
          <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
            <h2>Unemployment Database Management System</h2>
            <h3>"Welcome to the Unemployment Database Management System. Here you will find the latest information and data on unemployment rates and statistics. We hope that this resource will be helpful to you in your research and understanding of the current job market. Thank you for visiting."</h3>
          </div>
        </section>
      </nav>
     </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          </div><!-- End Left side columns -->
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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