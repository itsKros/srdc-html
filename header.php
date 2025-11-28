<?php
$pageName = basename($_SERVER['PHP_SELF'], ".php");
$pageClass = strtolower(str_replace(" ", "-", $pageName)); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dental Care</title>
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v7.1.0/css/fontawesome.css">

    <!--Font style.css -->
  <link rel="stylesheet" href="assets/css/font.css">

  <!-- style.css -->
  <link rel="stylesheet" href="assets/css/style.css">

    <!-- rsh-style.css -->
  <link rel="stylesheet" href="assets/css/rshin-style.css">

  

  <script src="https://kit.fontawesome.com/6aa80a5695.js" crossorigin="anonymous"></script>
</head>
<body class="<?php echo $pageClass; ?>">

  <!-- Header Section -->
   <header class="header-section" id="headerSection">
    <div class="header-container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">      
        <a class="navbar-brand" href="#">
          <img src="assets/imgs/SRDC-Logo.svg" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Dental Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Patient</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Articles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Career</a>
            </li>
          </ul>
        </div>  
        <a href="tel:0299772442" class="top-call">Call 02 9977 2442</a>      
      </nav>
    </div>
   </header>
