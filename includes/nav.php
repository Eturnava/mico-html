<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
 }
?>


<!-- header section starts -->
<header class="header_section">
  <div class="header_top">
    <div class="container">
      <div class="contact_nav">
        <a href=""><i class="fa fa-phone" aria-hidden="true"></i><span>Call : +01 123455678990</span></a>
        <a href=""><i class="fa fa-envelope" aria-hidden="true"></i><span>Email : demo@gmail.com</span></a>
        <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i><span>Location</span></a>
      </div>
    </div>
  </div>
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? ' active' : '' ?>">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? ' active' : '' ?>">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item<?= basename($_SERVER['PHP_SELF']) == 'treatment.php' ? ' active' : '' ?>">
                <a class="nav-link" href="treatment.php">Treatment</a>
              </li>
              <li class="nav-item<?= basename($_SERVER['PHP_SELF']) == 'doctor.php' ? ' active' : '' ?>">
                <a class="nav-link" href="doctor.php">Doctors</a>
              </li>
              <li class="nav-item<?= basename($_SERVER['PHP_SELF']) == 'testimonial.php' ? ' active' : '' ?>">
                <a class="nav-link" href="testimonial.php">Testimonial</a>
              </li>
              <li class="nav-item<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? ' active' : '' ?>">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
  <?php
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }

    if (isset($_SESSION['username'])):
  ?>
    <a href="welcome.php">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span><?= htmlspecialchars($_SESSION['username']) ?></span>
    </a>
    <a href="logout.php">
      <i class="fa fa-sign-out" aria-hidden="true"></i>
      <span>Logout</span>
    </a>
  <?php else: ?>
    <a href="login.php">
      <i class="fa fa-user" aria-hidden="true"></i>
      <span>Login</span>
    </a>
    <a href="signup.php">
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      <span>Sign Up</span>
    </a>
  <?php endif; ?>

  <form class="form-inline">
    <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
      <i class="fa fa-search" aria-hidden="true"></i>
    </button>
  </form>
</div>
      </nav>
    </div>
  </div>
</header>
<!-- header section ends -->
