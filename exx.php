<!DOCTYPE html>
<html>
  <head>
    <title>Login page</title>
    <style>
      /* Your existing styles here */
    </style>
  </head>
  <body style="display: flex;">
    <div style="flex: 1;"></div>

    <div class="login-card">
      <div style="padding-bottom: 15px; border-bottom: 2px solid #e6e6e6;">
        <center><p class="form-header" style="display: inline-block; vertical-align: middle;">Login</p></center>
      </div>
      <form action="#" method="post">
    
        <p style="margin-top: 15px; margin-bottom: 15px;">Email Address</p>
        <input class="email-box" type="email" name="email" placeholder="Enter your email">

        <p style="margin-top: 5px; margin-bottom: 15px;">Password</p>
        <input class="password-box" type="password" name="password" placeholder="Enter your password">

        <input class="signup-button" style="margin-bottom: 10px;" type="submit" value=" Login " name="login">

        <p class="already">Don't have an account? <a style="color: #FF9800;" href="signup.html"> Register</a></p>
      </form>
    </div>

    <div style="flex: 1;"></div>
  </body>
</html>
    <?php
        // Include the database connection file
        require 'connection.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Validate email and password
          $email = mysqli_real_escape_string($conn, $_POST["email"]);
          $password = mysqli_real_escape_string($conn, $_POST["password"]);

          if (empty($email)) {
            echo '<p style="color: red; margin-top: 15px;">Email address is required</p>';
          }

          if (empty($password)) {
            echo '<p style="color: red; margin-top: 5px;">Password is required</p>';
          }

          // If email and password are provided, perform database validation
          if (!empty($email) && !empty($password)) {
            $query = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
              // Authentication successful
              echo '<p style="color: green; margin-top: 15px;">Login successful</p>';
              // Add any additional logic or redirection here
            } else {
              // Authentication failed
              echo '<p style="color: red; margin-top: 15px;">Invalid email or password</p>';
            }
          }
        }
        ?>