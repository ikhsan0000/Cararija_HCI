<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

</head>
<body>

<?php
    $username = $_POST["post_username"];
?>
    <!-- Bootstrap Navbar Start  -->
  <div class="container" id="home-page">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
        <a class="navbar-brand title-logo" href="index_login.php">
            <img src="assets/logo-light.png" class="d-inline-block align-top top-icon" alt="">
            CARARIJA
         </a>
         
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-5">
            <a class="nav-link" href="index_login.php">HOME<span class="sr-only">(current)</span></a>
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

    <nav id="sidebar" class="active">
        <div class="sidebar-header">
            <h3>Job Filters</h3>
        </div>
        <ul class="list-unstyled components CTAs">
            <li>
                <a class="sidebarCollapse"><i class="fas fa-arrow-left fa-2x" id="back-arrow"></i></a>
            </li>

            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employment Type</a>
                <ul class="collapse list-unstyled" id="homeSubmenu" style="border-bottom: #6d7fcc solid">
                    <li>
                        <div class="custom-control custom-radio mt-3 ml-5">
                            <input type="radio" class="custom-control-input" id="customRadio1" name="E_radio" checked>
                            <label class="custom-control-label" for="customRadio1">All</label>
                        </div>
                        
                        <div class="custom-control custom-radio mt-3 ml-5">
                            <input type="radio" class="custom-control-input" id="customRadio2" name="E_radio">
                            <label class="custom-control-label" for="customRadio2">Part-Time</label>
                        </div>
                            
                        <div class="custom-control custom-radio mt-3 ml-5">
                            <input type="radio" class="custom-control-input" id="customRadio3" name="E_radio">
                            <label class="custom-control-label" for="customRadio3">Full-Time</label>
                        </div>
                            
                        <div class="custom-control custom-radio mt-3 ml-5 mb-3">
                            <input type="radio" class="custom-control-input" id="customRadio4" name="E_radio">
                            <label class="custom-control-label" for="customRadio4">Internship</label>
                        </div>
                    </li>                 
                </ul>
            </li>

            <li>
                <a href="#skillSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Skill needed</a>
                <ul class="collapse list-unstyled" id="skillSubmenu" style="border-bottom: #6d7fcc solid">
                    <li>
                        <div class="custom-control custom-checkbox mt-3 ml-5">
                            <input type="checkbox" class="custom-control-input" id="customcheck1" name="S_radio">
                            <label class="custom-control-label" for="customcheck1">Accounting</label>
                        </div>
                        
                        <div class="custom-control custom-checkbox mt-3 ml-5">
                            <input type="checkbox" class="custom-control-input" id="customcheck2" name="S_radio">
                            <label class="custom-control-label" for="customcheck2">Programming</label>
                        </div>
                            
                        <div class="custom-control custom-checkbox mt-3 ml-5">
                            <input type="checkbox" class="custom-control-input" id="customcheck3" name="S_radio">
                            <label class="custom-control-label" for="customcheck3">Law</label>
                        </div>
                            
                        <div class="custom-control custom-checkbox mt-3 ml-5 mb-3">
                            <input type="checkbox" class="custom-control-input" id="customcheck4" name="S_radio">
                            <label class="custom-control-label" for="customcheck4">HR</label>
                        </div>
                    </li>                 
                </ul>
            </li>

            <li>
                <a href="#salarySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Salary</a>
                <ul class="collapse list-unstyled" id="salarySubmenu" style="border-bottom: #6d7fcc solid">
                    <li>
                        <div class="form-group mt-3 ml-3 mr-4">
                            <label for="min">Min :</label>
                            <input type="number" class="form-control" id="min">
                        </div>
                        
                        <div class="form-group mt-3 ml-3 mr-4">
                            <label for="max">Max :</label>
                            <input type="number" class="form-control" id="max">
                        </div>
                       
                        <button type="button" class="btn btn-secondary">Update</button>
                        <button type="button" class="btn btn-outline btn-secondary">Reset</button>
                    </li>                 
                </ul>
            </li>
    </nav>

    
    <button type="button" id="sidebarCollapse" class="sidebarCollapse btn btn-info">
        <i class="fas fa-arrow-right"></i>
        <span>Job Filter</span>
    </button>

    <div class="row">
    <?php for($i = 0; $i<7 ; $i++): ?>
        <div class="col-sm-4">
            <div class="card mt-4 mb-3">
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
                            <p class="icon-title">Salary:</p>
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
    <p style="font-size: 15px; text-align: center">Dst . . .</p>
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