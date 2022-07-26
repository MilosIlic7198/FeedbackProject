<?php include 'config/database.php'; ?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Feedback</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
      <div class="container">
        <a
          href="index.php"
          class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none"
        >
          <img
            src="https://cdn-icons-png.flaticon.com/512/7471/7471556.png"
            alt="logo"
            class="bi me-2"
            width="40"
            height="40"
            role="img"
            aria-label="feedback"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Front Page</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="feedback.php">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">

              <?php 
              if(isset($_SESSION['user_id']))
              {
              ?>

              <br><p><?php echo $_SESSION['user_email']; ?></p>
              <a class="nav-link" href="inc/sign_out.php">Sign Out</a>

              <?php
              } else {
              ?>

              <a class="nav-link" href="sign_user.php">Sign In / Sign Up</a>

              <?php
              }
              ?>
              
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <div class="container d-flex flex-column align-items-center">
