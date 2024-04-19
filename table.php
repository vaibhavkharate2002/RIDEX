<?php
include_once('connection.php');
$query="select * from users";
$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
  <title>My site</title>
  <link href="tablestyle.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>a {text-decoration: none;} </style>
<body>
<header>
  <ul id="head">
    <li><a href="index.html">Home
    <li><a href="registration.html">Login
    <li><a class="active" href="table.php">Users</a>
  </ul>
</header>
<form id=ft align="center" width="100%">
  <table id="tbl" aling="center" border="1px" style="width=300px;line-height=40px;">
  <tr>
    <th colspan="4"><h2>Users</h2></th>
  </tr>
  <t>
    <th>ID</th>
    <th>Name</th>
    <th>Last Name</th>
    <th>Phone</th>
  </t>
  <?php
  while($rows=mysqli_fetch_assoc($result)){
  ?>
    <tr>
      <td><?php echo $rows['id'] ?></td>
      <td><?php echo $rows['fname'] ?></td>
      <td><?php echo $rows['lname'] ?></td>
      <td><?php echo $rows['num'] ?></td>
    </tr>
    <?php
      }
    ?>
  </table>
</form>
  <footer float="center">
  <a href="#" class="fa fa-facebook" value="google.com">
  <a href="#" class="fa fa-twitter">
  <a href="#" class="fa fa-google">
  <a href="#" class="fa fa-linkedin">
  <a href="#" class="fa fa-skype"></a>
  </footer>
</body>
</html>
