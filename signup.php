<!DOCTYPE html>
<html>
<head>
  <title>Sign up page</title>
  <style>
    *
    {
      text-decoration: none;
      font-family: arial;
      margin: 0;
      padding: 10;
    }
    body
    {
      background-color: rgb(206, 160, 150);
      min-height: 60vh;
      background-image: url("images/background.jpg");
      background-size: cover;
      background-position: center;
      position: relative;
      z-index: 1;
      display: flex;
    }
    .login-card
    {
      margin-top: 70px;
      background-color: transparent;
      box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1);
      border-radius: 16px;
      padding: 20px;
      border-color: #fff;
      border-style: solid;
      border-width: 2px;
      transition: 0.5s;
      backdrop-filter: blur(10px);
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
    .name-box
    {
      width: 150px;
    }

    .signup-button
    {
      color: white;
      background: #FF9800;
      margin-left: ;
      cursor: pointer;
      border: 5px solid white;
      transition: 0.2s;
    }
    .password-box
    {
      width: 300px;
    }
    .already
    {
      text-align: center;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <div style="flex: 1;"></div>    
  <div class="login-card">
    <div style="padding-bottom: 15px; border-bottom: 2px solid #e6e6e6;">
      <center><p class="form-header" style="display: inline-block; vertical-align: middle;">Register</p></center>
    </div>
    <form action="registerinsert.php" method="post">
      <div style="display: inline-block; margin-top: 20px;">
        <p>First name</p>
        <input name="fname" class="name-box" type="text" placeholder="First Name" id="fname" required>
      </div>
      <div style="display: inline-block;">
        <p>Last name</p>
        <input name="lname" class="name-box" type="text" placeholder="Last Name" id="lname" required>
      </div>
      <p style="margin-top: 10px;">Address</p>
      <input name="address" class="email-box" style="margin-bottom: 10px;" type="text" placeholder="Enter your Address" id="address" required>
      <p>Email Address</p>
      <input name="email" class="email-box" type="email" placeholder="Enter your email" id="email" required>
      <p>Password</p>
      <input name="password" class="password-box" type="password" placeholder="Enter your password" id="password" required>
      <p>Confirm Password</p>
      <input name="cpassword" class="password-box" style="margin-bottom: 10px;" type="password" placeholder="Reenter your password" id="cpassword" required>
      <p style="color:red;" id="warning"></p>
      <input class="signup-button" style="margin-bottom: 5px;" type="submit" value="Signup">
      <p class="already">Already have an account? <a style="color: #FF9800;" href="login.php"> Login</a></p>
    </form>
  </div>
  <div style="flex: 1;"></div>
</body>
</html>
<script type="text/javascript">
  const password = document.getElementById('password');
  const confirmPassword = document.getElementById('cpassword');
  const warning = document.getElementById('warning');

  confirmPassword.addEventListener('input', function(){
    if(password.value !== confirmPassword.value){
      warning.innerHTML = 'Passwords do not match!';
    } else {
      warning.innerHTML = '';
    }
  });
</script>
<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Firstname = $_POST['fname'];
    $Lastname = $_POST['lname'];
    $Address = $_POST['address'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    if ($Firstname != "" && $Lastname != "" && $Address != "" && $Email != "" && $Password != "") {
        // Hash the password
        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO signup (Firstname, Lastname, Address, Email, Password) 
                VALUES ('$Firstname','$Lastname','$Address','$Email','$hashedPassword')";

        $data = mysqli_query($conn, $sql);

        if ($data) {
            // Redirect to login page
            header("Location: http://localhost/prabin/login.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required";
    }
}
?>
