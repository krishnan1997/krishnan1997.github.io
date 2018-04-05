
<!DOCTYPE html>
<html>
<head>
<!--<script type="text/javascript">
function AjaxFunction()
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
//alert(httpxml.responseText);
var myarray = JSON.parse(httpxml.responseText);
// Remove the options from 2nd dropdown list 
for(j=document.testform.subcat.options.length-1;j>=0;j--)
{
document.testform.subcat.remove(j);
}


for (i=0;i<myarray.data.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myarray.data[i].subcategory;
optn.value = myarray.data[i].subcat_id;  // You can change this to subcategory 
document.testform.subcat.options.add(optn);

} 
      }
    } // end of function stateck
	var url="dd.php";
var cat_id=document.getElementById('s1').value;
url=url+"?cat_id="+cat_id;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
//alert(url);
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>-->
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
$mod=$_POST["di"];
$nam=$_POST["name"];
$dat=$_POST["do"];
$sour=$_POST["email"];
$destinatio=$_POST["cat"];
$clas=$_POST["tri"];
$adult=$_POST["thuthu"];
$childre=$_POST["coim"];
$children=$_POST["madu"];
$query="INSERT INTO hotel(mode,name,date,source,destination,class,adults,childre,children) VALUES('$mod','$nam','$dat','$sour','$destinatio','$clas','$adult',
   '$childre','$children')";
    $rec2=mysqli_query($conn,$query);
	$temp="SELECT id FROM book WHERE name='$nam'";
	$rec2=mysqli_query($conn,$temp);
	$temp1=mysqli_fetch_assoc($rec2);
	//echo $temp1['id'];
		//echo $msg;
		echo '<script language="javascript">alert("Hotel booked Successfully !!!"); </script>';
		//echo "Name :: $nam";
		//echo "Checkin date :: $mod";
		//echo "Checkin date :: $mod";
		//echo "<script>document.location='$url'</script>";
	//myAlert($msg,"busfli.php");
}
   ?>
  

   <h1 class="agile_head text-center">Book hotels</h1>
   <p class="text-center">Book cozy and luxurious hotels</p>
     <div class="container w3">
		<form action="hotel.php" method="post" class="agile_form">
		   <h2 class="w3layouts text-center">Offers a quick and easy way to book hotels online</h2>
		   
			<div class="clear"></div>
			<input type="text" placeholder="Your Name" name="name" class="name agileits" required=""/>
			<input type="text" placeholder="Your registered email" name="email" class="name agileits" required=""/>
			<h2 class="w3layouts text-center">Enter check-in date</h2>
			<input type="text" placeholder="dd/mm/yyyy" name="di" class="name agileits" required=""/>
			<h2 class="w3layouts text-center">Enter check-out date</h2>
			<input type="text" placeholder="dd/mm/yyyy" name="do" class="name agileits" required=""/>
			<div class="list_agileits_w3layouts">
			
				<div class="section_class_agileits sec-left" >
				<select name="cat" id="cat" onchange="fun()">
				<option value="0">Select city</option>
				<option value="1">Trichy</option>
				<option value="2">Thuthukudi</option>
				<option value="3">Madurai</option>
				<option value="4">Coimbatore</option>	
				</select>	
</div>
<div class="section_class_agileits sec-right" >

<select name="tri" id="1" style="display:none;">
				<option value="Hotel RR Inn">Hotel RR Inn</option>
				<option value="Hotel ITC">Hotel ITC</option>
				<option value="Hotel Accord">Hotel Accord</option>
</select>
<select name="thuthu" id="2" style="display:none;">
				<option value="Hotel Connemora">Hotel Connemora</option>
				<option value="Hotel Apple Tree">Hotel Apple Tree</option>
				<option value="Hotel AAR Royal Park">Hotel AAR Royal Park</option>
</select>
<select name="madu" id="3" style="display:none;">
				<option value="Hotel Queen garden">Hotel Queen garden</option>
				<option value="Hotel Park Hyatt">Hotel Park Hyatt</option>
				<option value="Hotel Grand Corona">Hotel Grand Corona</option>
</select>
<select name="coim"id="4" style="display:none;">
				<option value="Hotel Woodlands">Hotel Woodlands</option>
				<option value="Hotel Atlanta">Hotel Atlanta</option>
				<option value="Hotel Grand Canyon">Hotel Grand Canyon</option>
</select>
<div class="submit">
			  <input type="submit" name="boo" value="BOOK TICKET">
			</div>
		</form>	
		</br>
	
	</div>	<br>
	<!--<p>	<a href="hotelbill.php"> Show Purchased Ticket </a> </p>-->
	<div class="agileits_w3layouts_copyright text-center">
			<p>TRAVELMONKEY!! Dream. Explore. Discover.</p>
	</div>
	
	<script type="text/javascript">
	function fun(){
	var e = document.getElementById("cat");
var strUser = e.options[e.selectedIndex].value;
//document.write(strUser);
var temp=document.getElementById(strUser);
temp.style.display="block";
	}
	</script>
<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- /End-date-piker -->
<center><a href="https://www.accuweather.com/en/us/new-york-ny/10007/current-weather/349727" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
-->
</a><div id="awtd1522675202258" class="aw-widget-36hour"  data-locationkey="" data-unit="f" data-language="en-us" data-useip="false" data-uid="awtd1522675202258" data-editlocation="true"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
<br><br><br><br></center>		
</body>
</html>