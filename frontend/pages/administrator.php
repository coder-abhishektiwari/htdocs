<?php
session_start();

// Check if the logout button has been clicked
if (isset($_POST['logout'])) {
  session_unset(); // Unset all session variables
  session_destroy();
  header("Location: signin.html");
  exit();
}

// Simplified Check for logged-in user or guest
if (!isset($_SESSION['userid']) && !isset($_SESSION['guest'])) {
  header("Location: signin.html");
  exit();
}

?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrator - Online Dhudho</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!--nav bar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../../index.php">Online-Dhundho</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../../index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Plumber</a></li>
              <li><a class="dropdown-item" href="#">Carpenter</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Docter</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><b>Administrator</b></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="aboutus.php">About Us</a>
          </li>
        </ul>
        <!--login logout functionality-->
        <?php
        if (isset($_SESSION['userid'])) {
          // If the user is logged in, display the welcome message and logout button
          echo "Welcome, " . $_SESSION['username'] . "";
          echo '<form action="" method="POST">
                &nbsp &nbsp<button class="btn btn-outline-success" type="submit" name="logout"">Signout</button>
              </form>';
        } else {
          // If the user is not logged in, display the login and signup buttons
          echo '<button class="btn btn-outline-success" style="align:right;" onClick="goToLogin()">Log in</button>';
          echo '&nbsp<button class="btn btn-outline-success" style="align:right;" onClick="goToSignUp()">Sign up</button>';
        }
        ?>
      </div>
    </div>
  </nav>

  <!-- Administrator Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Administrator</h2>
    <div class="row justify-content-center">
      <!-- Admin Info -->
      <div class="col-md-8">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <img src="../../images/admin.jpg" alt="Administrator" class="rounded-circle mb-3" width="150" height="150">
            <h5 class="card-title">Abhishek Tiwari</h5>
            <p class="card-text">Abhishek Tiwari is the administrator of this platform. With years of experience in managing
              digital platforms, Abhishek ensures everything runs smoothly and efficiently. His dedication to maintaining
              the highest standards makes him an invaluable part of our team.</p>
            <p class="card-text">Abhishek is passionate about technology and helping local businesses thrive online. He
              believes in the power of digital transformation and is always looking for ways to innovate and improve the
              platform.</p>
            <p class="card-text"><strong>Contact:</strong> admin@online-dhundho.serveo.net</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function goToLogin() {
      window.location.href = 'signin.html'
    }

    function goToSignUp() {
      window.location.href = 'signup.html'
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>