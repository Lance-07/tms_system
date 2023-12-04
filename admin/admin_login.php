<?php 
  include('../includes/connections.php');
  if(isset($_POST['adminLogin'])) {
    $query = "SELECT email, password, name from admins WHERE email = '$_POST[email]' and password = '$_POST[password]'";

    $query_run = mysqli_query($connection, $query);
    if(mysqli_num_rows($query_run)) {
      echo "<script type='text/javascript'>
      window.location.href = 'admin_dashboard.php';
      </script>
      ";
    }
    else {
      echo "<script type='text/javascript'>
      alert('Please enter correct detail.');
      window.location.href = 'admin_login.php';
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
  <title>Admin Login</title>
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
          <a href="../index.php" class="text-decoration-none lead text-secondary mb-3 d-block">
            Back to home</a>
          <h2 class="card-title fw-bold">Admin Login</h2>
        </div>

        <hr>
        <form action="" method="POST">
          <!-- Email input -->
          <div class="form-floating mt-3">
            <input class="form-control" type="email" name="email" placeholder="e.g. juandelacruz@example.com" required>
              <label for="" class="form-label">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-floating mt-3">
            <input class="form-control" type="password" name="password" placeholder="" required>
            <label for="" class="form-label">Password</label>
          </div>

          <!-- Link to account recovery -->
          <p class="mt-2">Forgot password?</p>

          <!-- Login button -->
          <input type="submit" name="adminLogin" value="Login" class="btn btn-warning mt-3">
        </form>
      </div>
    </div>

  </div>
</body>
</html>