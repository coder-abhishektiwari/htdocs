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
    <title>Contact Us - Online Dhudho</title>
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
            <a class="nav-link active" href="#"><b>Contact Us</b></a>
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

<!-- Contact Us Section -->
<div class="container my-5">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            <!-- Contact Details -->
            <div class="col-md-6">
                <h5>Our Contact Details</h5>
                <p><strong>Address:</strong> 1234 Market Street, Suite 500, San Francisco, CA 94103</p>
                <p><strong>Email:</strong> <a href="mailto:info@localservices.com">info@localservices.com</a></p>
                <p><strong>Phone:</strong> (+1) 123-456-7890</p>
                <p><strong>Office Hours:</strong> Monday - Friday, 9 AM - 5 PM</p>
                <div class="map-container mt-4">
                    <h5>Find Us on the Map</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.907066567281!2d-122.084249684681!3d37.42199977982547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbb5a7c27b1fb%3A0x70a2f184835e4d24!2sGoogleplex!5e0!3m2!1sen!2sus!4v1634856296121!5m2!1sen!2sus" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script>
    function goToLogin(){
    window.location.href = 'signin.html'
    }

    function goToSignUp(){
    window.location.href = 'signup.html'
    }
  </script> 
</body>

</html>