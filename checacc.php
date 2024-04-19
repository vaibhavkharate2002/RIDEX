<?php
include_once('connection.php');
$query="select * from users";
$result=mysqli_query($con,$query);
$num = filter_input(INPUT_POST,'num');
$password=filter_input(INPUT_POST,'password');
$flag=0;
$passerr=0;
while($rows=mysqli_fetch_assoc($result)){
if($rows['num']==$num){$passerr=1;}
if($rows['num']==$num and $rows['password']==$password){
  $flag=1;$passerr=0;
  echo "Greetings ".$rows['fname']." ".$rows['lname'].", You have successfully logged in.
   <a href=login.html>Log out</a>";
}
}
if($passerr==1){
  echo "Wrong password.
   <a href=login.html>Try again</a>";
}
else if ($flag==0){
echo "User does not exist.
 <a href=login.html>Try again</a>";
}
?>
