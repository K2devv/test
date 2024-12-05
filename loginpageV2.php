<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="loginpageV2.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link href="https://db.onlinewebfonts.com/c/83e4a6b639612cd501853be5a7cf97ab?family=Trend+Sans+One+Regular" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/proxima-nova-condensed" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/dm-sans" rel="stylesheet">
    <title>Login Page</title>
    <link rel="icon" href="images/orgIconV2.png" type="image/png">
  </head>
  
  <body>
    <nav class="navbar">
      <div class="nav-logo">
        <img src="images/logoV2.png" alt="ORGCONNECT">
      </div>
      <div class="nav-links">
        <button class="icon-btn home-icon">
            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
        </button>
        <button class="icon-btn dark-icon">
          <i class="fa-solid fa-moon" style="color: #ffffff;"></i>
        </button>
      </div>
    </nav>
   
    <div class="container" id="container">
      <div class="sign-up">
        <form action="signup.php" method="POST">
          <h1>CREATE ACCOUNT</h1>
          
          <div class="input-container-signUp">
              <input type="text" name="name" placeholder="Full Name" class="pHolder"/>
              <i class="input-icon-signUp fa-regular fa-user"></i>
          </div>
          
          <div class="input-container-signUp">
              <input type="email" name="email" placeholder="Email" class="pHolder"/>
              <i class="input-icon-signUp fa-regular fa-envelope"></i>
          </div>
          
          <div class="input-container-signUp">
              <input type="text" name="username" placeholder="Student ID" class="pHolder"/>
              <i class="input-icon-signUp fa-regular fa-id-card"></i>
          </div>
          
          <div class="input-container-signUp">
              <input type="password" name="password" placeholder="Password" class="pHolder"/>
              <i class="input-icon-signUp fa-regular fa-eye"></i>
          </div>
          
          <div class="input-container-signUp">
              <input type="password" name="confirm_password"  placeholder="Re-enter Password" class="pHolder" required/>
              <i class="input-icon-signUp fa-regular fa-eye"></i>
          </div>
          
          <button>Sign Up</button>
        </form>
      </div>
      
      
        <div class="sign-in" id="sign-in">
          <form action="login.php" method="POST">
            <h1>SIGN IN TO YOUR ACCOUNT</h1>
            
            <div class="input-container-logIn">
                <input type="text" name="username" placeholder="Student ID" class="pHolder"/>
                <i class="input-icon-logIn fa-regular fa-id-card"></i>
            </div>
            
            <div class="input-container-logIn">
                <input type="password" name="password" placeholder="Password" class="pHolder"/>
                <i class="input-icon-logIn fa-regular fa-eye"></i>
            </div>
            
            <a class="forgot-password" href="forgotpw.html">Forgot password?</a>
            
            
            <button>LOG IN</button>
          </form>
        </div>
      
      

      <div class="toogle-container">
        <div class="toogle">
          <div class="toogle-panel toogle-left">
            <h1>Welcome back to ORGCONNECT!</h1>
            <p>We’ve missed you! Log in to pick up where you left off, stay connected with your university, and never miss an exciting event again.</p>
            <button class="hidden" id="login">LOG IN</button>
          </div>
          <div class="toogle-panel toogle-right">
            <h1>Welcome to ORGCONNECT!</h1>
            <p>Sign up to join a community that brings students and organizations together. Create your account and start connecting with campus organizations.</p>
            <button class="hidden" id="register">REGISTER</button>
          </div>
        </div>
      </div>
    </div>
    <script src="loginpageV2.js"></script>
  </body>
</html>

