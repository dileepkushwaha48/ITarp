<!--                                                             View admin panel -->

<?php 
include "connection.php";
$sql="SELECT * FROM `signup` WHERE 1";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  <style>
    table
    {
      border-collapse: collapse;
    }
    table th,td
    {
      padding: 10px;
    }
  </style>
</head>
<body>

  <?php
  if(mysqli_num_rows($result)>0)
  {
  ?>
  <center>
    <h1>Admin pannel</h1>
    <table border="2" style="font-family: arial; margin-top: 50px">
      <tr>
        <th>SN</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Action</th>
      </tr>

      <?php 
      $i=0;
      while($row=mysqli_fetch_array($result))
      {
      ?>

      <tr>
        <td><?php echo $row["SN"]?></td>
        <td><?php echo $row["fname"]?></td>
        <td><?php echo $row["lname"]?></td>
        <td><?php echo $row["address"]?></td>
        <td><?php echo $row["email"]?></td>
        <td><a href="delete.php?id=<?php echo $row["SN"];?>">Delete</a></td>
      </tr>

      <?php
      $i++;
      }
      ?>
    
    </table>

    <a href="deleteall.php"><button style="margin-top: 20px;">Delete ALL</button></a>
    <a href="index.php"><button>Home</button></a>
  </center>


  <?php
  }
  else
  {
    echo"No data found";
  }
  ?>


</body>
</html>