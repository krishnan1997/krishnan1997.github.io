<!DOCTYPE HTML>
<html>
<head>
<title>Ticket</title>
</head>
<body>

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
}
$query="SELECT * FROM book WHERE id='$temp'";
$rec=mysqli_query($con,$query);
while($rec1=mysqli_fetch_assoc($rec))
{
    echo "<tr>";
    echo "Your TICKET ID :: <td><strong>" .$rec1['id']."</strong></td>";echo "<br>";
	echo "Mode of Travel :: <td><strong>" .$rec1['mode']."</strong></td>";echo "<br>";
    echo "Passenger Name :: <td><strong>" .$rec1['name']."</strong></td>";echo "<br>";
    echo "Date of Travel :: <td><strong>" .$rec1['date']."</strong></td>";echo "<br>";
    echo "source location :: <td><strong>" .$rec1['source']."</strong></td>";echo "<br>";
    echo "Destination Location :: <td><strong>" .$rec1['destination']."</strong></td>";echo "<br>";
    echo "Class : <td><strong>" .$rec1['class']."</strong></td>";echo "<br>";
    echo "No. of adults ::<td><strong>" .$rec1['adults']."</strong></td>";echo "<br>";
    echo "No. of children :: <td><strong>" .$rec1['children']."</strong></td>";    echo "<br>";  

echo "<tr>";echo "</tr>";
            echo "<tr>";echo "</tr>";
            echo "This is the generated e-TICKET !! Happy journey FROM TRAVELGEO !! thanks for booking !!!";
            echo "<br>";

}

  mysqli_close($con);
  ?>
  
  <form action="bill.php" method="post">
  <div>
    <img src="1.jpeg" alt="Avatar">
  </div>
<div>
    <label><b>Enter ticket Id:</b></label>
    <input type="text" placeholder="Enter Ticket ID" name="uid" required>
	</div>
	<input type="submit"  name="sum" value="Show Ticket" required>
	</form>
  </body>
  </html>