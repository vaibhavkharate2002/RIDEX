<?php
$fname = filter_input(INPUT_POST,'fname');
$lname = filter_input(INPUT_POST,'lname');
$num = filter_input(INPUT_POST,'num');
$password = filter_input(INPUT_POST,'password');
if(!empty($fname)){
  if(!empty($password)){
    if(!empty($lname)){
    if(!empty($num)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="login";
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno().') '. mysqli_connect_error());
}else{
  $sql="INSERT INTO users (fname,lname,num,password)
  values ('$fname','$lname','$num','$password')";
  if($conn->query($sql)){
    echo "You have successfully logged in";
    echo '<br><a href="login.html">Log out</a>';
  }else{
    echo "Error: ". $sql ."<br>". $conn->error;
  }
  $conn->close();
}
}
else{
  /*echo "Field phone cannot be left empty";*/
  header('Location: registration.html');
  die();
}
}else{
  echo "Field Last Name cannot be left empty";
  die();
}
}else{
  echo "Field Password cannot be left empty";
  die();
}
}else{
  echo "Field First Name cannot be left empty";
  die();
}

?>
