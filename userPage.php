<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/startbootstrap-simple-sidebar.css">
    <link rel="stylesheet" type="text/css" href="CSS/card.css">


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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

</head>
<body>
    <!-- Bootstrap Navbar Start  -->
  <div class="container" id="home-page">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
      <a class="navbar-brand title-logo" href="#">CARARIJA</a>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active mr-5">
            <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item mr-5">
            <a class="nav-link" href="#">LINK</a>
          </li>

          <button type="button" class="btn my-btn-login mr-5 btn-size" id="login-btn">LOGIN</button>

          <button type="button" class="btn btn-primary btn-size" id="register-btn">REGISTER</button>
          
        </ul>
      </div>
      
    </nav>
    <!-- Bootstrap Navbar End  -->

    <nav id="sidebar" class="active">
        <div class="sidebar-header">
            <h3>Job Filters</h3>
        </div>
        <ul class="list-unstyled components CTAs">
            <li>
                <a class="sidebarCollapse"><i class="fas fa-arrow-left fa-2x" id="back-arrow"></i></a>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li>
                <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
            </li>
            <li>
                <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
            </li>
        </ul>
    </nav>

    
    <button type="button" id="sidebarCollapse" class="sidebarCollapse btn btn-info">
        <i class="fas fa-arrow-right"></i>
        <span>Job Filter</span>
    </button>

    <div class="row">
    <?php for($i = 0; $i<5 ; $i++): ?>
        <div class="col-sm-4">
            <div class="card mt-5">
                <img class="profile mt-4" src="assets/icon_perusahaan/google.png">
                <div class="card-head">
                    <p class="card-title">Google</p>
                    <p class="card-subtitle">Apply before: 15/11/2020</p>
                </div>
                <div class="card-body ml-3">

                    <div class="card-req">
                        <div class="card-icon">
                            <i class="far fa-id-badge fa-3x card-icon"></i>    
                        </div>
                        <p class="icon-title">Looking for:</p>
                        <p class="icon-description">Software Developer</p>
                    </div>

                    <div class="card-sallary">
                        <div class="card-icon">
                                <i class="fas fa-dollar-sign fa-3x card-icon"></i>    
                            </div>
                            <p class="icon-title">Sallary:</p>
                            <p class="icon-description">$50k</p>
                    </div>

                    <div class="card-location">
                        <div class="card-icon">
                                <i class="fas fa-map-marker-alt fa-3x card-icon"></i>    
                            </div>
                            <p class="icon-title">Location:</p>
                            <p class="icon-description">Depok</p>
                    </div>

                    <div class="card-experience">
                        <div class="card-icon">
                                <i class="fas fa-briefcase fa-3x card-icon"></i>    
                            </div>
                            <p class="icon-title">Experience:</p>
                            <p class="icon-description">50 - 100 Years</p>
                    </div>

                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>

  </div>
    


    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('.sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>