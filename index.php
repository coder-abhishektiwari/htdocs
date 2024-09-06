<?php
session_start();

// Check if the logout button has been clicked
if (isset($_POST['logout'])) {
  session_unset(); // Unset all session variables
  session_destroy();
  header("Location: frontend/pages/signin.html");
  exit();
}

// Simplified Check for logged-in user or guest
if (!isset($_SESSION['userid']) && !isset($_SESSION['guest'])) {
  header("Location: frontend/pages/signin.html");
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
  <title>Online Dhundho - Find trusted service providers right in your neighborhood.</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">

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
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="#"><b>Home</b></a>
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
            <a class="nav-link" href="frontend/pages/administrator.php">Administrator</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="frontend/pages/contactus.php">Contact Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link active" href="frontend/pages/aboutus.php">About Us</a>
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


  <!-- Carousel -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/home_banner.webp" class="d-block w-100" alt="..." style="height: 800px;">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="https://www.boltonservice.com/wp-content/uploads/2019/01/plumbing-1200x796.jpg" class="d-block w-100"
          alt="..." style="height: 800px;">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="https://images.theconversation.com/files/380125/original/file-20210122-15-1y2cj9g.jpg"
          class="d-block w-100" alt="..." style="height: 800px;">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="https://alis.alberta.ca/media/697347/electrician-istock-487018428.jpg" class="d-block w-100" alt="..."
          style="height: 800px;">
        <div class="overlay"></div>
      </div>
      <div class="carousel-item">
        <img src="https://housecalldoctor.com.au/wp-content/uploads/2017/06/Male-doctor-treating-patient.jpg"
          class="d-block w-100" alt="..." style="height: 800px;">
        <div class="overlay"></div>
      </div>
    </div>

    <!-- Static content over the carousel -->
    <div class="carousel-caption-static">
      <div class="overlay">
        <!--greeting user-->
        <?php
        if (isset($_SESSION['userid'])) {
          // If the user is logged in, display the welcome message and logout button
          echo "<h2>Hi, " . $_SESSION['username'] . "</h2>";
        } else {
          // If the user is not logged in, display the login and signup buttons
          echo "<h2>Hi, " . $_SESSION['username'] . "</h2>";
        }
        ?>


        <h1>Discover Local Services, Made Easy!</h1>
        <p>Find trusted service providers right in your neighborhood. Whether you need a plumber, electrician, or a
          doctor, we’ve got you covered.</p>
        <!-- Search Bar -->
        <div class="search-container">
          <input type="text" class="form-control" placeholder="Search for services...">
          <button class="btn btn-primary">Search</button>
        </div>
      </div>
    </div>


  </div>


  <!-- Service Categories -->
  <div class="container my-4">
    <h2 class="text-center">Service Categories</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card category-card">
          <img src="images/plumbing.jpg" class="card-img-top" alt="Plumbing" height="400px">
          <div class="card-body">
            <h5 class="card-title">Plumbing</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card category-card">
          <img src="images/carpenter.jpg" class="card-img-top" alt="Electrical" height="400px">
          <div class="card-body">
            <h5 class="card-title">Carpenter</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card category-card">
          <img src="images/electrical.jpg" class="card-img-top" alt="Electrical" height="400px">
          <div class="card-body">
            <h5 class="card-title">Electrical</h5>
          </div>
        </div>
      </div>
      <!-- Add more categories as needed -->
    </div>
  </div>


  <!-- Featured Services -->
  <div class="container featured-services">
    <h2 class="text-center">Featured Services</h2>
    <div id="featuredServicesCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="featured-service1.jpg" class="d-block w-100" alt="Featured Service 1">
        </div>
        <div class="carousel-item">
          <img src="featured-service2.jpg" class="d-block w-100" alt="Featured Service 2">
        </div>
        <!-- Add more carousel items as needed -->
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#featuredServicesCarousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#featuredServicesCarousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- Map Integration -->
  <div class="container my-4">
    <h2 class="text-center">Find Us on the Map</h2>
    <div class="map-container">
      <!-- Embed Google Map or similar -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.907066567281!2d-122.084249684681!3d37.42199977982547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fbb5a7c27b1fb%3A0x70a2f184835e4d24!2sGoogleplex!5e0!3m2!1sen!2sus!4v1634856296121!5m2!1sen!2sus"
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

  <!-- Contact Information -->
  <div class="container my-4">
    <h2 class="text-center">Contact Us</h2>
    <div class="text-center">
      <p>If you have any questions, feel free to reach out to us!</p>
      <p>Email: <a href="mailto:abhishektiwari1706@gmail.com">info@localservices.com</a></p>
      <p>Phone: (+91) 829-559-9649</p>
    </div>
  </div>
  <h1>Your Location</h1>
  <button onclick="getLocation()">Get Location</button>
  <p id="location"></p>

















  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</body>

</html>