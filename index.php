<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EzTix</title>
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Home page -->
  <div class="container d-flex" style="height: 100dvh;">
    <div class="row justify-content-center align-items-center m-auto">
      <!-- User Login -->
      <div class="col-sm col-md-4 mb-3 mb-sm-0 h-100">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">User Login</h5>
            <p class="lead card-text">View tickets given by the Team Lead and send review to see if the task are done.</p>
          </div>
          <div class="card-footer">
            <a href="user_login.php" class="btn btn-primary">User Login</a>
          </div>
        </div>
      </div>

      <!-- User Register -->
      <div class="col-sm col-md-4 mb-3 mb-sm-0 h-100">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">User Registration</h5>
            <p class="lead card-text">Create an account to manage your task and work effectively.</p>
          </div>
          <div class="card-footer">
            <a id="" href="register.php" class="btn btn-success">Register</a>
          </div>
        </div>
      </div>

      <!-- Admin Login -->
      <div class="col-sm- col-md-6 col-lg-4 mb-3 mt-sm-3 h-100">
        <div class="card shadow border-dark">
        <div class="card-header">Administrator Only</div>
          <div class="card-body">
            <h5 class="card-title">Admin Login</h5>
            <p class="lead card-text">Create ticket and assign a member to do it, review the work done, and keep track of the progress of each development.</p>
          </div>
          <div class="card-footer">
            <a id="admin-btn" href="admin/admin_login.php" class="btn btn-secondary">Admin Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  // Calculate the maximum height
  var maxHeight = 0;
  var cards = document.querySelectorAll('.card');

  for (var i = 0; i < cards.length; i++) {
    var cardHeight = cards[i].offsetHeight;
    if (cardHeight > maxHeight) {
      maxHeight = cardHeight;
    }
  }

  // Set the height of all cards
  for (var i = 0; i < cards.length; i++) {
    cards[i].style.height = maxHeight + 'px';
  }
</script>

<!-- Button -->
<script>
  $(document).ready(function() {
    $("#button1").click(function() {
      loadPage('./page1.html');
    });

    $("#button2").click(function() {
      loadPage('./page2.html');
    });

    $("#button3").click(function() {
      loadPage('./page3.html');
    });
  });

  function loadPage(url) {
    $.ajax({
      url: url,
      type: 'GET',
      success: function(data) {
        $("#content").html(data);
      }
    });
  }
</script>
</body>
</html>