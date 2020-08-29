<html>
<head>
<title>Welcome to Online Cab Booking</title>
<STYLE TYPE="text/css">
H1{font-size:28px;font-family:Lucida Calligraphy;}
H2{background-color:white;color:black;font-size:25px;font-family: Arial Black;}
a:link {color: Black;}
a:visited {color: Black;}
a:hover {text-decoration: underline}
a:active {color:Black;}
a {text-decoration: none}
</STYLE></head>
<body>
<table align="right" cellspacing="28" >
<tr >
<td><font size="+1" face="Lucida Handwriting"><A href="1.html">Home</A></font></td>
<td><font size="+1" face="Lucida Handwriting"><A href="2.html">About</A></font></td>
<td><font size="+1" face="Lucida Handwriting"><A href="farechart.html">Fare Chart</A></font></td>
<td><font size="+1" face="Lucida Handwriting"><A href="Login.html">Login</A></font></td>
<td><font size="+1" face="Lucida Handwriting"><A href="3.html">Contact Us</A></font></td>
<td><font size="+1" face="Lucida Handwriting"><A href="4.html">Sign Up</A></font></td>
</tr>
</table>
<h1><img src="download.png" height="55" width="45"></img><font color="blue">ky Cabs</font></h1>
<hr>
<marquee direction="left"><B><font face="Comic Sans MS">Get around every nook and corner of India with SKYCABS! Make our app your best buddy. From cabs to autos, food to groceries, we have you covered! For exciting offers, discount coupons and many other attractive services<A href="sign up.html"> Sign up</A></font></B></marquee>
<img src="Cabs-in-Gurgaon.png" alt="[.png format]" align="center"</img><img src="big-car-mumbai.png" alt="[.png format]" align="center" </img>
<hr size="1" color="black">
<form method="POST" action="<?php echo$_SERVER["PHP_SELF"];?>">
<h3 align="center"><font face="Comic Sans MS">Book a Cab In Less Than 60 Seconds!</font></h3>
<table cellspacing="10" cellpadding="10" align="center">
<tr>
<td>First Name:<input type="text" name="fname" size="25" maxlength="24"></td>
<td>Second Name:<input type="text" name="fname1" size="25" maxlength="34"></br></td>
</tr>
<tr>
<td>Address:<input type="text" name="add" size="25" maxlength="24"></td>
<td>City:<input type="text" name="city" size="25" maxlength="24"></br></td>
</tr>
<tr>
<td>Mobile:<input type="text" name="num" size="25" maxlength="24"></td>
<td>E-mail:<input type="text" name="first" size="25" maxlength="24"></br></td>
</tr>
<tr>
<td>Date of Travelling:<input type="txt3" name="date"size="25" maxlength="24"></td>
<td>Date of Departure:<input type="txt4" name="date_2"size="25" maxlength="24"></td>
</tr>
<tr>
<td>Pick up Time:<input type="txt5" name="tym"size="25" maxlength="24"></td>
<td>Pickup Location:<select name="fare">
<option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Bengaluru">Bengaluru</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Vadodara">Vadodara</option>
                                <option value="Surat">Surat</option>
                                <option value="Pune">Pune</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Visakhapatnam">Visakhapatnam</option>
                                <option value="Bhubaneswar">Bhubaneswar</option>
                                <option value="Mysore">Mysore</option>
                                <option value="Jodhpur">Jodhpur</option>
                                <option value="Udaipur">Udaipur</option>
                                <option value="Indore">Indore</option>
                                <option value="Ludhiana">Ludhiana</option>
                                <option value="Coimbatore">Coimbatore</option>
                                <option value="Kochi">Kochi</option>
                                <option value="Gurgaon">Gurgaon</option> 
                                <option value="Noida">Noida</option> 
                                <option value="lucknow">Lucknow</option>
</select></td>
</tr>
<tr>
<td>Dropping Time:<input type="txt8" name="drtym" size="25" maxlength="24"></td>
<td>Drop Location:<select name="fare2">
<option value="Delhi">Delhi</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Bengaluru">Bengaluru</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Vadodara">Vadodara</option>
                                <option value="Surat">Surat</option>
                                <option value="Pune">Pune</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Visakhapatnam">Visakhapatnam</option>
                                <option value="Bhubaneswar">Bhubaneswar</option>
                                <option value="Mysore">Mysore</option>
                                <option value="Jodhpur">Jodhpur</option>
                                <option value="Udaipur">Udaipur</option>
                                <option value="Indore">Indore</option>
                                <option value="Ludhiana">Ludhiana</option>
                                <option value="Coimbatore">Coimbatore</option>
                                <option value="Kochi">Kochi</option>
                                <option value="Gurgaon">Gurgaon</option> 
                                <option value="Noida">Noida</option> 
                                <option value="lucknow">Lucknow</option>
</select></td>
</tr>
<tr>
<td>Car:<select name="cars">
<option value="Hyundai">Hyundai Santro GLS</option>
                                <option value="Wagon R">Maruti Suzuki Wagon R</option>
                                <option value="Swift">Maruti Suzuki Swift</option>
                                <option value="alto">Maruti Suzuki Alto 800</option>
                                <option value="i10">Hyundai I10</option>
                                <option value="kwid">Renault KWID</option>
                                <option value="k10">Maruti Suzuki Alto K10</option>
                                <option value="hi10">Hyundai Grand I10</option>
                                <option value="Maruti Suzuki Celerio">Maruti Suzuki Celerio</option>
                                <option value="eon">Hyundai Eon</option>
                                <option value="eeco">Maruti Suzuki EECO</option>
                                </select>

 </td>
</tr>
</table>
<Center>
If you want a cab other than those mentioned above please specify here:<Input type="text" name="carname" maxlength="24"><br>
</Center>
<Center>
<input type="reset">
<input type="submit" value="Book my Cab" name="btnSubmit" id="btnSubmit">
<br>
<a href="http://localhost/display.php">View</a>
<input type="submit" value="Book" name="btnSubmit1" id="btnSubmit1">
</Center>
</form>
<?php
function writedetails()
{
if (isset($_POST['fname']))
{
$fp=fopen("Booking.txt","a+");
$record=$_POST["fname"]." ".$_POST["fname1"]." ".$_POST["add"]." ".$_POST["city"]." ".$_POST["num"]." ".$_POST["first"]." ".$_POST["txt3"]." ".$_POST["txt4"]." ".$_POST["txt5"]." ".$_POST["fare"]." ".$_POST["txt8"]." ".$_POST["fare2"]." ".$_POST["cars"];
fwrite($fp,$record."\r\n");
echo "<font color='olive' face='arial' size='4px'>"."YOUR CAB IS SUCCESSFULLY BOOKED."."</font>";
fclose($fp);
}
}
/*function disp()
{
$file="Booking.txt";
$fp=fopen($file,"r");
rewind($fp);
echo "<font color='purple' face='arial' size='4px'>"."Details"."</font>";
echo "<br>";
while(!feof($fp))
{
$customerline=fgets($fp,255);

echo "<font color='purple' face='arial' size='4px'>".$customerline."<br>"."</font>";
}
fclose($fp);
}*/
if (isset($_POST['btnSubmit']))
{
writedetails();
}
if (isset($_POST['btnSubmit']))
{
header("http://localhost/display.php");
}

?>
</body>
</html>