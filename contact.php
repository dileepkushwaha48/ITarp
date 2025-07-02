<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        min-height: 100vh;
        background-image: url("background.jpg"); /* Replace "background.jpg" with your image path */
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        background-color: rgba(155, 143, 143, 0.244);; /* Transparent background */
        padding: 20px;
        border-radius: 10px;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    textarea {
        width: 350px;
        height: 30px; /* Decreased the height */
        margin-bottom: 10px;
        padding: 10px;
        border: none;
        border-radius: 25px;
    }

    textarea {
        height: 100px; /* Decreased the height */
    }

    .send {
        width: 110px;
        height: 40px;
        border: none;
        border-radius: 25px;
        background-color: #05e1ec;;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }

    .send:hover {
        background-color: #FFA726;
    }
  </style>
  <script type="text/javascript">
    function validateForm() {
      let name = document.getElementById('name').value;
      let email = document.getElementById('email').value;
      let phone = document.getElementById('phone').value;
      let message = document.getElementById('message').value;

      if (name === "" || email === "" || phone === "" || message === "") {
        alert("All fields are required");
        return false;
      }

      if (phone.length !== 10 || isNaN(phone)) {
        alert("The phone number must be 10 digits");
        return false;
      }

      return true;
    }
  </script>
</head>
<body>
  <div class="container">
    <h1 class="header">Contact Us</h1>
    <form action="contactinsert.php" method="post" onsubmit="return validateForm()">
      <table>
        <tr>
          <td><input name="Name" type="text" placeholder="Full Name" id="name"></td>
        </tr>
        <tr>
          <td><input name="Email" type="email" placeholder="E-mail" id="email"></td>
        </tr>
        <tr>
          <td><input name="number" type="number" placeholder="Phone" id="phone"></td>
        </tr>
        <tr>
          <td><textarea name="message" placeholder="Your Message" id="message"></textarea></td>
        </tr>
        <tr>
          <td><input class="send" type="submit" value="Send"></td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>

<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['number'];
    $message = $_POST['message'];

    if ($name != "" && $email != "" && $phone != "" && $message != "") {
        $sql = "INSERT INTO contact (Name, Email, Phone, Your_Message) VALUES ('$name','$email','$phone','$message')";
        $data = mysqli_query($conn, $sql);
        
        if ($data) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "All fields are required";
    }
}
?>
