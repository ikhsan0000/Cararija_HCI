<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
    <link rel="stylesheet" type="text/css" href="CSS/register.css">

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
      <a class="navbar-brand title-logo" href="index.php">
        <img src="assets/logo-light.png" class="d-inline-block align-top top-icon" alt="">
        CARARIJA
      </a>
      
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-5">
            <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item mr-5">
            <a class="nav-link" href="index.php">LINK</a>
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
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
      <fieldset>

      <div class="registration-form-card">
        <!-- Form Name -->
        <h2 class="mb-4 mt-4">Registration Form</h2>

        <!-- Text input-->

        <div class="form-group" >
          <label class="col-md-4 control-label">First Name</label>  
          <div class="col-md-4 offset-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <div class="custom-control custom-checkbox mb-4" id="firstname-div" style="margin-top: -15px">
          <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
          <label class="custom-control-label" for="customCheck">Need Middle Name?</label>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Last Name</label> 
            <div class="col-md-4 offset-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
            </div>
          </div>
        </div>

          <div class="form-group"> 
          <label class="col-md-4 control-label">Department / Office</label>
            <div class="col-md-4 offset-md-4 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="department" class="form-control selectpicker">
              <option value="">Select your Department/Office</option>
              <option>Department of Engineering</option>
              <option>Department of Agriculture</option>
              <option >Accounting Office</option>
              <option >Tresurer's Office</option>
              <option >MPDC</option>
              <option >MCTC</option>
              <option >MCR</option>
              <option >Mayor's Office</option>
              <option >Tourism Office</option>
            </select>
          </div>
        </div>
        </div>
          
        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Username</label>  
          <div class="col-md-4 offset-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="user_name" placeholder="Username" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Password</label> 
            <div class="col-md-4 offset-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="user_password" placeholder="Password" class="form-control"  type="password">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Confirm Password</label> 
            <div class="col-md-4 offset-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password">
            </div>
          </div>
        </div>

        <!-- Text input-->
              <div class="form-group">
          <label class="col-md-4 control-label">E-Mail</label>  
            <div class="col-md-4 offset-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
            </div>
          </div>
        </div>


        <!-- Text input-->
              
        <div class="form-group">
          <label class="col-md-4 control-label">Contact No.</label>  
            <div class="col-md-4 offset-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="contact_no" placeholder="(639)" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <button class="btn my-btn-login btn-size" type="button"> Submit </button>
        </div>

        <a href="" class="mb-3" style="color: #9d73dd;">Complete later</a>

        </fieldset>
        </form>

      </div>
      
      
  </div>

<script>

$(document).ready(function(){
  var middlename = '<div class="form-group" id="middlename-div"> <label class="col-md-4 control-label">Middle Name</label> <div class="col-md-4 offset-md-4 inputGroupContainer"><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input  name="user_name" placeholder="Middle name" class="form-control"  type="text"></div></div></div>'
  $("#customCheck").on('change', e=>{
    if($(e.target).is(':checked'))
    {
      $("#firstname-div").after(middlename)
    }
    else
    {
      $("#middlename-div").remove();
    }
  });
  

});

  
  
</script>

</body>
</html>