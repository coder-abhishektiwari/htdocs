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
    <title>About Us - Online Dhundho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!--nav bar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Online-Dhundho</a>
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
            <a class="nav-link" href="administrator.php">Administrator</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="aboutus.php"><b>About Us</b></a>
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


    <!-- About Us Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">About Us</h2>
        <div class="row">
            <!-- About the Site -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">About the Site</h5>
                        <p class="card-text">This site is designed to help local markets go online. Our platform connects service providers with customers in their vicinity, making it easier for businesses to reach more people and for customers to find services they need.</p>
                    </div>
                </div>
            </div>
            <!-- Purpose of the Site -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Purpose of the Site</h5>
                        <p class="card-text">The main purpose of this site is to support local businesses by providing them with a digital presence. We aim to bridge the gap between traditional markets and modern consumers, ensuring everyone has access to essential services nearby.</p>
                    </div>
                </div>
            </div>
            <!-- About the Company -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">About the Company</h5>
                        <p class="card-text">Our company is dedicated to empowering local businesses through innovative technology solutions. We believe in the power of local communities and strive to support their growth by bringing their services online.</p>
                    </div>
                </div>
            </div>
            <!-- Our Vision -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text">We envision a future where every local business has the tools and resources to thrive in the digital age. Our platform is just the beginning of our journey to create a more connected and accessible world for everyone.</p>
                    </div>
                </div>
            </div>
            <!-- Our Values -->
            <div class="col-md-12 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Our Values</h5>
                        <p class="card-text">Integrity, innovation, and inclusivity are at the core of everything we do. We are committed to delivering value to our users and fostering a community where local businesses can thrive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>











  <script>
    function goToLogin(){
    window.location.href = 'signin.html'
    }

    function goToSignUp(){
    window.location.href = 'signup.html'
    }
  </script> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>