
<!DOCTYPE html>
<html>
<head>
<title>Book My Trip </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Book My Trip web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i" rel="stylesheet">
<!-- //stylesheet -->
</head>
<body class="bg agileinfo">
<?php
$mod=$nam=$dat=$sourc=$destinatio=$clas="";
$adult=$childre=0;
$conn = new mysqli("127.0.0.1","root","sairam123");
if(!$conn)
{
    echo "connection failed";
}
$dbhandle=mysqli_select_db($conn,"db");
if(isset($_POST["boo"]))
{
$mod=$_POST["view"];
$nam=$_POST["name"];
$dat=$_POST["da"];
$sour=$_POST["src"];
$destinatio=$_POST["dest"];
$clas=$_POST["cla"];
$adult=$_POST["adu"];
$childre=$_POST["chi"];
$query="INSERT INTO book(mode,name,date,source,destination,class,adults,children) VALUES('$mod','$nam','$dat','$sour','$destinatio','$clas','$adult',
   '$childre')";
    $rec2=mysqli_query($conn,$query);
	$temp="SELECT id FROM book WHERE name='$nam'";
	$rec2=mysqli_query($conn,$temp);
	$temp1=mysqli_fetch_assoc($rec2);
	//echo $temp1['id'];
		//echo $msg;
		echo '<script language="javascript">alert("Ticket booked Successfully !!! please note your ticket id!=  '.$temp1['id'].'"); </script>';
		//echo "<script>document.location='$url'</script>";
	//myAlert($msg,"busfli.php");
}
   ?>
  

   <h1 class="agile_head text-center">Book My Trip</h1>
   <p class="text-center">Book Flights and Buses.</p>
     <div class="container w3">
		<form action="busfli.php" method="post" class="agile_form">
		   <h2 class="w3layouts text-center">Offers a quick and easy way to book tickets online</h2>
		   <ul class="agile_info_select">
				 <li><input type="radio" name="view" id="excellent" value="flights" required> 
				 	  <label for="excellent">Flight</label>
				      <div class="check w3"></div>
				 </li>
			 <li><input type="radio" name="view" id="neutral" class=" w3l" value="buses" required> 
					 <label for="neutral">Bus</label>
				     <div class="check wthree"></div>
			     </li>
			</ul>
			<div class="clear"></div>
			<input type="text" placeholder="Your Name" name="name" class="name agileits" required=""/>
			<input type="text" placeholder="date" name="da" class="name agileits" required=""/>
			<div class="list_agileits_w3layouts">
				<div class="section_class_agileits sec-left" >
				<select name="src">
					<!--<option value="">Source City</option>-->
					<option value="" placeholder="Enter source" required="">Source city</option>
					<option value="Chennai">Chennai</option>
					<option value="Delhi">Delhi</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Kolkata">Kolkata</option>
					<option value="Bangalore">Bangalore</option>
					<option value="Hyderabad">Hyderabad</option>
					<option value="Pune">Pune</option>
					<option value="Lucknow">Lucknow</option>
					
				  </select>
				  </div>
				  
				  <div class="section_class_agileits sec-left" >
				  <select name="dest">
					<!--<option value="0">Destination City</option>-->
					<option value="" placeholder="Enter Destination City" required="">Destination city</option>
					<option value="Trichy">Trichy</option>
					<option value="Thuthukudi">Thuthukudi</option>
					<option value="Coimbatore">Coimbatore</option>
					<option value="Salem">Salem</option>
					<option value="Madurai">Madurai</option>
					<option value="Vellore">Vellore</option>
					<option value="Thanjavur">Thanjavur</option>
					<option value="Neyveli">Neyveli</option>
					
				  </select>
				</div>
				<div class="section_class_agileits sec-right">
				  <select name="cla">
					<option value="0">select class</option>
					<option value="Any">Any</option>
					<option value="Economy">Economy Class</option>
					<option value="Business"> Business Class</option>
					<option value="First">First Class</option>
					<option value="Sleeper">Sleeper Class</option>
				  </select>
				</div>	
				<div class="clear"></div>
			</div>	
			<div class="list_agileits_w3layouts">
				<div class="section_class_agileits sec-left">
				 <select name="adu">
					<option value="">Adults</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2"> 2</option>
					<option value="3">3 or 3+</option>
				 </select>
				</div>	
				<div class="section_class_agileits sec-right">
				  <select name="chi">
					<option value="">Children</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2"> 2</option>
					<option value="3">3 or 3+</option>
				 </select>
				</div>
				<div class="clear"></div>
            </div>				
			<div class="submit">
			  <input type="submit" name="boo" value="BOOK TICKET">
			</div>  
		</form>	
		</br>
	<p>	<a href="bill.php"> Show Purchased Ticket </a> </p>
	</div>	
	<div class="agileits_w3layouts_copyright text-center">
			<p>TRAVELMONKEY!! Dream. Explore. Discover.</p>
	</div>
<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script><center><a href="https://www.accuweather.com/en/us/new-york-ny/10007/current-weather/349727" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awtd1522675202258" class="aw-widget-36hour"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="false" data-uid="awtd1522675202258" data-editlocation="true"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
<br><br><br><br></center>
<!-- /End-date-piker -->		
</body>
</html>