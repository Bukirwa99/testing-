<?php
include_once('top.html');
include('common.php');
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE></TITLE> 
<link href="C:\xampp\htdocs\myphpwork\bacon.css" rel="stylesheets" type="text/css">
</HEAD>
<body >
<center style="background-color:pink">
<form action="" method="POST">
<input type="text" name="season" id="season" required list="seasons">
<input type="text" name="team" id="team" list="teams">
<input type="submit" value="search" name="search">
</form>
<?php
//<INPUT type="text" name="id" placeholder="Enter search"><br>

//<input type="submit" name="search" value="SEARCH">
//connect-to-database
/*$connect= mysqli_connect("localhost","root","","iperu");
if(mysqli_connect_errno()){
    echo "unable to connect".mysqli_connect_error();
    exit();
}*/
//query-database
if(isset($_POST['search'])){
    
    $season = $_POST['season'];
    $search_team = $_POST['team'];
    $query="SELECT awayteam,hometeam FROM '$season' WHERE awayteam='$search_team' OR hometeam='$search_team'";
    $result=mysqli_query($connect,$query)
    or die(mysqli_error($connect));
    echo"<table border=1px>";
    echo"<tr><td>hometeam</td><td>awayteam</td></tr>";
    while($row = mysqli_fetch_array($result)){
    
        ?>
        
   <tr>
 <td><?php echo $row['hometeam'];?></td>
   <td><?php echo $row['awayteam'];?></td>
   </tr>

    <?php
    

    }
    
}

echo"</table>";
?>
<button><a href="myepld.php">AddNewSeason</a></button>

<button><a href="remove_season.php">Removeseason</a></button>
</center>
</body>
<?php  
   include_once('bottom.html');
  ?> 
</html>