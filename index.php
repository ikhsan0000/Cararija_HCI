<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/mystyle.css">
    <link rel="stylesheet" type="text/css" href="CSS/register-login-box.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b107706b66.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Google Fonts -->
      <!-- Poppins -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100..800&display=swap" rel="stylesheet">

      <!-- JQ -->
      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</head>
<body>
  <!-- Bootstrap Navbar Start  -->
  <div class="container" id="home-page">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
      <a class="navbar-brand title-logo" href="index.php">
        <img src="assets/logo-light.png" class="d-inline-block align-top top-icon" alt="">
        CARARIJA
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active mr-5">
            <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
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

    <span class="headline">
      Cari Kerja?<br>
    </span>
    <span class="headline2">
       Rileks Aja
    </span>
    <p class="general-text inline-flex">
      Sedang ingin mencari penghasilan tambahan? Atau ingin mencari tempat magang untuk keperluan kuliah? Cararija solusinya!
    </p>
    
    <img src="assets/logo2.png" alt="logo" class="logo-bg inline-flex">

    <button type="button" class="btn my-btn-explore" id=explore>
      <span class="explore-text">Explore Now</span>
    </button>


  </div> <!-- Container End -->


  <!-- Login-Register Box Start -->
  <div class="login-layout" id="login-layout" style="display: none">
    <i class="fas fa-arrow-left fa-2x back-icon" id="back-arrow"></i>
    <div class="form-container sign-up-container">
      <form action="registerDetail.php" method="POST">
        <h1>Create Account</h1>
        <div class="social-container">
          <a href="https://www.facebook.com" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="https://accounts.google.com/login" target="_blank" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="https://www.linkedin.com/login" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use E-Mail</span>
        <input type="text" placeholder="Username" id="register_name" name="post_username" required>
        <input type="email" placeholder="E-mail" id="register_email" name="post_email" required>
        <input type="password" placeholder="Password" id="register_password" name="post_password" required>
        <input type="password" placeholder="Confirm Password" id="register_confirm_password" required>
        <button id="register_btn">Sign Up</button>
      </form>
    </div>

    <div class="form-container login-container">
      <form>
        <h1>Login</h1>
        <div class="social-container">
          <a href="https://www.facebook.com" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="https://accounts.google.com/login" target="_blank" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="https://www.linkedin.com/login" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use E-Mail</span>
        <input type="email" placeholder="E-mail" id="login_email">
        <input type="password" placeholder="Password" id="login_password">
        <a href="#">Forgot your password?</a>
        <button id="login_btn">Login</button>
      </form>  
    </div>

    <div class="overlay-container">
      <div class="overlay">
        
        <div class="overlay-panel left-panel">
          <h1>You're back!</h1>
          <p>
            Please login here
          </p>
          <button class="ghost" id="login">Login</button>
        </div>

        <div class="overlay-panel right-panel">
          <h1>Hey There!</h1>
          <p>
            Join us here
          </p>
          <button class="ghost" id="signup">Sign up</button>
        </div>
        
      </div>
    </div>

  </div> <!-- Login Box End -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>

  <script>
 
    $("#login-btn, #register-btn, #explore").click(function(){
      $('#login-layout').removeAttr("style");
      $("#home-page").addClass('swipe-left')
      $("#home-page").animate({opacity: 0}, 300)
      $("#login-layout").addClass("login-swipe-left")
      $("#login-layout").animate({opacity: '100%'}, 300)
    });

    $("#back-arrow").click(function(){
      $("#home-page").removeClass('swipe-left')
      $("#home-page").animate({opacity: '100%'}, 300)
      $("#login-layout").addClass("hide")
      $("#login-layout").removeClass("login-swipe-left")
      $("#login-layout").animate({opacity: 0}, 300, function(){
        $("#login-layout").attr("style", "display:none;")
      })
    });

    $("#signup").click(function(){
      $("#login-layout").addClass("right-panel-active")
    });
    $("#login, #explore").click(function(){
      $("#login-layout").removeClass("right-panel-active")
    });

    $("#register-btn").click(function(){
      $("#login-layout").addClass("right-panel-active");
    })
    $("#login-btn, #explore").click(function(){
      $("#login-layout").removeClass("right-panel-active");
    })

    // LOGIN & REGISTER

    $(document).ready(function(){
    // LOGIN ACTION
      $("#login_btn").click(function(e){
        e.preventDefault();
        var login_email = $("#login_email").val();
        var password_id = $("#login_password").val();
        var err_msg = '<div class="error-notification" id="error-notification">';

        if(login_email == "cararija@gmail.com" && password_id == "admin123")
        {
          console.log(login_email);
          console.log(password_id);
          window.location.replace("userPage.php");

        }
        else if(login_email === "" || password_id === "")
        {
          err_msg = err_msg+"Please Input Your Email/Password</div>";
          $("#error-notification").remove();
          $("#login_password").after(err_msg);
          console.log(err_msg);
        }
        else
        {
          err_msg = err_msg+"Wrong Email/Password, Please try again</div>";
          $("#error-notification").remove();
          $("#login_password").after(err_msg);
          console.log(err_msg);
        }

      });

      $("#explore").click(function(e){
        e.preventDefault();
        var err_msg = '<div class="error-notification" id="error-notification"> Please Login First !</div>';
        $("#error-notification").remove();
        $("#login_password").after(err_msg);
      })

      $("#register_btn").click(function(e){
        var err_msg_reg = '<div class="error-notification" id="error-notification-register">Please input all forms</div>';
        reg_username = $("#register_name").val();
        reg_email = $("#register_email").val();
        reg_password = $("#register_password").val();
        reg_confirm = $("#register_confirm_password").val();
        reg_password = $("#register_password").val();
        if(reg_username == "" || reg_email == "" || reg_password == "")
        {
          $("#error-notification-register").remove();
          $("#register_confirm_password").after(err_msg_reg);
        }

        if(reg_password != reg_confirm)
        {
          $("#error-notification-register").remove();
          err_msg_reg = '<div class="error-notification" id="error-notification-register">Password does not match</div>';
          $("#register_confirm_password").after(err_msg_reg);
          e.preventDefault();
        }
      });

    });



    

  </script>
</html>
