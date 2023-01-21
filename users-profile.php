<?php
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'user_profile');
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  } else {
      echo "Connected successfully";
  }
  if (isset($_POST['submit'])) {
    // Get the user input data from the form
    $full_name = $_POST['fullName'];
    $about = $_POST['about'];
    $role = $_POST['Role'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    if (empty($_POST['fullName']) || empty($_POST['about']) || empty($_POST['Role']) || empty($_POST['country']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['email'])) {
        echo "All fields are required.";
    } else {
    // Use prepared statement to update the user's data in the database
    $stmt = $conn->prepare("INSERT INTO users (full_name, about, role, country, address, phone, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $about, $role, $country, $address, $phone, $email);
    $stmt->execute();
}

    // Close the connection
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head></head>

<body>



<div class="tab-pane fade profile-edit pt-3" id="profile-edit"> 
                  <!-- Profile Edit Form -->
                  <form method="post" action="users-profile.php">

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="fullName" type="text" class="form-control" id="fullName" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px" required></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Role" class="col-md-4 col-lg-3 col-form-label">Role</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="Role" type="text" class="form-control" id="Role" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="country" type="text" class="form-control" id="Country" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="address" type="text" class="form-control" id="Address" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="Phone" required>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="Email" required>
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>
                </body>

</html>