<html>
<body>
<?php
include_once('top.html');

?>

<?php 
//connecting to db
$connection=mysqli_connect("localhost","root","","iperu");
//checking if  connection is successful
if(mysqli_connect_errno()){
    echo "unable to connect".mysqli_connect_error();
    exit();
}

  //insert data into table
 
 $sql="INSERT INTO football(Date,Hometeam,Awayteam,FTR)VALUES
  ('$_POST[date]','$_POST[Hometeam]','$_POST[Awayteam]','$_POST[FTR]')";
  //check if  it  has been  recorded
  if(mysqli_query($connection,$sql)){
    echo "Recorded";
  }else{
    echo "couldnt record  $sql."  .mysqli_error($connection);
  }

  ?>
 </html>
 </body>