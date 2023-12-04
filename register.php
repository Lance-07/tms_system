<?php 
  include('includes/connections.php');
  if(isset($_POST['userRegistration'])) {
    $query = "INSERT into users values(null, '$_POST[name]', '$_POST[email]', '$_POST[password]', '$_POST[mobile]')";

    $query_run = mysqli_query($connection, $query);
    if($query_run) {
      echo "<script type='text/javascript'>
      alert('User registered successfully.');
      window.location.href = 'index.php';
      </script>
      ";
    }
    else {
      echo "<script type='text/javascript'>
      alert('Error, Please try again.');
      window.location.href = 'register.php';
      </script>
      ";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="container-lg d-flex" style="height: 100dvh;">
    <div class="row justify-content-center align-items-center m-5 w-100 mx-auto">
      <div class="card col-8 p-4 border-0 shadow-lg rounded">
        <div>
          <a href="index.php" class="text-decoration-none lead text-secondary mb-3 d-block">
            Back to home</a>
          <h2 class="card-title fw-bold">User Registration</h2>
        </div>

        <hr>
        <form action="" method="POST">
          <!-- Full name input -->
          <div class="form-floating mt-3">
            <input class="form-control" type="text" name="name" placeholder="e.g. Juan Dela Cruz" required>
              <label for="" class="form-label">Full Name</label>
          </div>

          <div class="row">
            <!-- Email input -->
            <div class="form-floating mt-3 col-lg-6">
              <input class="form-control" type="email" name="email" placeholder="e.g. juandelacruz@example.com" required>
                <label for="" class="form-label ms-2">Email</label>
            </div>

            <!-- Mobile number input -->
            <div class="form-floating mt-3 col-lg-6">
              <input class="form-control" type="text" name="mobile" placeholder="e.g. 09974825476" required>
              <label for="" class="form-label ms-2">Mobile Number</label>
            </div>
          </div>

          <div class="row">
            <!-- Password input -->
            <div class="form-floating mt-3 col-lg-6">
              <input class="form-control" type="password" name="password" placeholder="" required>
              <label for="" class="form-label ms-2">Password</label>
            </div>

            <!-- Confirm Password input -->
            <div class="form-floating mt-3 col-lg-6">
              <input class="form-control" type="password" name="confirm_password" placeholder="" required>
              <label for="" class="form-label ms-2">Confirm Password</label>
            </div>
          </div>

          <!-- Link to Login -->
          <a href="user_login.php" class="mt-3 text-decoration-none d-block text-black">Already have an account?</a>

          <!-- Login button -->
          <input type="submit" name="userRegistration" value="Register" class="btn btn-warning mt-3">
        </form>
      </div>
    </div>

  </div>
</body>
</html>