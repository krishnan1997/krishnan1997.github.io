<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="cancel.css">
<title>Ticket</title>
</head>
<body background="2.jpg">

<?php
$temp=0;
 $con=mysqli_connect("127.0.0.1","root","sairam123");
 if(!$con)
{
    echo "connection failed";
}
  
  $dbhandle=mysqli_select_db($con,"db");
  echo "HII. !!! Welcome";
  echo "<br><br><br>";
  if(isset($_POST["sum"]))
{
$temp=$_POST["uid"];
echo '<script type="text/javascript"> alert("CANCEL successfull") </script>';
}
$query="DELETE FROM book WHERE id='$temp'";
$rec=mysqli_query($con,$query);
mysqli_close($con);
  ?>
  
  <form action="cancel.php" method="post">
  <div>
    <!--<img src="hd.jpg" alt="Avatar">-->
  </div>
<div>
    <label><h2 style="color:white;">Enter ticket Id to cancel the TICKET:</h2></label>
    <input type="text" placeholder="Enter Ticket ID" name="uid" required>
	</div>
	<center><input type="submit"  class="cancelbtn" name="sum" value="Cancel Ticket"></center>
	</form>
  </body>
  </html>