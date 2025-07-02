
<!DOCTYPE html>
<html>
  <head>
    <title>Login page</title>
    <style>
      *
      {
        text-decoration: none;
        font-family: arial;
        margin: 0;
        padding: 0;
      }
      body
      {
        /* background-color: rgb(206, 160, 150); */
        min-height: 100vh;
        background-image: url("images/background.jpg");
        background-size: cover;
        background-position: centre;
        position: relative;
        z-index: 1;
      }
      .login-card
      {
        margin-top: 70px;
        background-color: transparent;
        backdrop-filter: blur(10px);
        box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1);
        border-radius: 16px;
        padding: 20px;
        border-color: #fff;
        border-style: solid;
        border-width: 2px;
        transition: 0.2s;
        height: 250px;
      }
      .email-box
      {
        width: 310px;
        margin-bottom: 10px;
      }
      .form-header
      {
        font-size: 25px;
        font-weight: 600;
      }
      .login-card input
      {
        padding: 0 8px;
        height: 35px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      .signup-button
      {
        color: white;
        background: #FF9800;
        margin-left: 15px;
        cursor: pointer;
        border: 1px solid white;
        transition: 0.3s;
      }
      .password-box
      {
        width: 223px;
      }
      .already
      {
        text-align: center;
        margin-top: 5px;
      }
    </style>
  </head>
  
  <body style="display: flex;">
      <div style="flex: 1;">
      </div>

      <div class="login-card">
        <div style="padding-bottom: 15px;
        border-bottom: 2px solid #e6e6e6;">

          <center><p class="form-header" style="display: inline-block; vertical-align: middle;">Login</p></center>
          
  
        </div>
        <form action="authentication.php" method="post">
  
          <p style="margin-top: 15px; margin-bottom: 15px;">Email Address</p>
          <input class="email-box" type="email" placeholder="Enter your email" name="Email">
  
          <p style="margin-top: 5px; margin-bottom: 15px;">Password</p>
		  <input class="password-box" type="password" placeholder="Enter your password" name="Password">

  
          <input class="signup-button" style="margin-bottom: 10px;" type="submit" value=" Login " name="login">
  
          <p class="already">Don't have an account? <a style="color: #FF9800;" href="signup.php"> Register</a></p>
        </form>
      </div>

      <div style="flex: 1;">
      </div>
</html>


