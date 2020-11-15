<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
    <!-- <link rel="stylesheet" type="text/css" href="CSS/card.css"> -->

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b107706b66.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Google Fonts -->
      <!-- Poppins -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..800&display=swap" rel="stylesheet">

      <!-- JQ -->
      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

</head>
<body>
  <!-- PHP POST -->
  <?php
    $username = $_POST["post_username"];
  ?>
    <!-- Bootstrap Navbar Start  -->
  <div class="container" id="home-page">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
      <a class="navbar-brand title-logo" href="#">
        <img src="assets/logo-light.png" class="d-inline-block align-top top-icon" alt="">
        CARARIJA
      </a>
      
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-5">
            <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item mr-5">
            <a class="nav-link" href="#">LINK</a>
          </li>
          
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle pr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome, <?=$username?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><span><i class="fas fa-cog"></i> Preferences</span></a>
                    <a class="dropdown-item" href="#"><span><i class="far fa-envelope"></i> Contact Support</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php"><span><i class="fas fa-power-off"></i> Log Out</span></a>
                </div>
            </li>
        </ul>
      </div>
      
    </nav>
    <!-- Bootstrap Navbar End  -->
  
  </div>

</body>
</html>