<head>

<title> Easy Travel</title>
</head>


<style>



k{


color:green;
font-size:20px;

background-color:#f28858;
height:100px;
width:1365px;
position:absolute;
          top:1px;
left:0px;
right:0px;
}


n{


color:white;
font-size:20px;

background-color:#f28858;
height:220px;
width:100%;
position:absolute;
    left:0px;   
}



nav {


	
	background-color:#f28858;
	height: 40px;
	width: 1365px;
	position:absolute;
        top:97;
        right:0px;
left:0px;
}

nav ul{
list-style-type:none;
float:right;
}
nav li{
float:left;
margin-right:12px;
}


body
{
background-color:white;
}


pub{

text-align:center;	

background-color: blue;

position:absolute;
	height: 40px;
	width: 400px;
        top:145;
        right:470px;
}

puk{

text-align:center;	

background-color: red;

position:absolute;
	height: 40px;
	width: 600px;
        top:145;
        right:400px;
}



div{
position:absolute;
top:280px;
left:475px;

border:1px solid black;
background:skyblue;
height:250px;
width:400px;
border-radius:15px;
}




</style>

<body>




<k>

<nav>
 <ul >
<li><a href="index.html"><font face="Gunplay" font size="4" color="white">HOME</a></li></font>	
<li><a href="about.html"><font face="Gunplay" font size="4" color="white">About</a></li></font>
<li><a href="mybookings.html"><font face="Gunplay" font size="4" color="white">My Booking</a></li></font>
 <li><a href="cancellation.html"><font face="Gunplay" font size="4" color="white">Cancellation</a></li></font>
   <li><a href="print.html"><font face="Gunplay" font size="4" color="white">Print Ticket</a></li></font>
 <li><a href="contact.html"><font face="Gunplay" font size="4" color="white">Contact Us</a></li></font>
</ul></nav>

<imgl> 
&#160;&#160;&#160;&#160;<img src="images/logo1.png" alt="" height="75px" width="150px"/>
</imgl>
</k>




<br><br><br><br><br><br><br><br><br>



<?php 
$con=mysqli_connect("localhost","root","","bus_ticket");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$pid='';
$rid='';
$name='';
$email_id='';
$mob='';
$no_of_tickets='';
$date='';
$mode_sel='';

if (isset($_POST['rid']))
{
$rid=$_POST['rid'];
}



$sql='SELECT pid from passenger';
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC))
{
$pid = $row['pid'] +1;  // $row['pid']+1
}






if (isset($_POST['name']))
{
$name=$_POST['name'];
}


if (isset($_POST['email_id']))
{
$email_id=$_POST['email_id'];
}

if (isset($_POST['mob']))
{
$mob=$_POST['mob'];
}








if (isset($_POST['no_of_tickets']))
{
$no_of_tickets=$_POST['no_of_tickets'];
}



if (isset($_POST['date']))
{
$date=$_POST['date'];
}




if (isset($_POST['mode']))
{
$mode_sel=$_POST['mode'];
}







$sql = "SELECT avalseats from route where rid ='$rid' " ; 
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());

}
$row=mysqli_fetch_array($retval);


if($mode_sel == 1 && $no_of_tickets <= $row['avalseats']  && $rid != '' && $name != '' && $email_id != '' && $mob != '' && $date != '' ) 
{
echo"<pub>
<font face='Cursive' font size='5' color='yellow'>Complete Your Payment</font></a>
</pub>";


$sql="INSERT INTO passenger(pid,name,email,mob )
VALUES ('$pid','$name','$email_id','$mob')";

	if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));
}

$fare='';
$totalfare='';
$sql = "SELECT fare from route where rid ='$rid' " ; 
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());

}
while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC))
{

$fare =$row['fare'];

}
$totalfare=$fare*$no_of_tickets;

echo"<h2><font face='Arial' font size='3' color='black'><center><br><br>Total Amount :&#160;"."$fare "."(tk)"." * "."$no_of_tickets "." Seat(s) =  "."$totalfare "."/-</h2><br></font></center>";




echo"<center><form action='pdbbl.php' method='post'>
<div class='transbox'><br>
<font face='Script MT' font size='4' color='black'>&#160;&#160;&#160;&#160;Select Bank&#160;:&#160;&#160;&#160;&#160;&#160;</font>
<select name='bank' >
<option value='dbbl'>DBBL</option>
<option value='bkash'>BKash</option>

</select>

<br><br>
<font face='Arial' font size='4' color='black'>Card Number:</font>
<input type='text' name='num'>
<br><br>
<font face='Arial' font size='4' color='black'>Password
:</font>
<input type='password' name='cvv'>
<br>
<font face='Arial' font size='4' color='black'><br>Expiry Date :</font>
<input type='date' name='expdate'>
<input type='hidden'  name='no_of_tickets' value='$no_of_tickets'>
<input type='hidden'  name='pid' value='$pid'>
<input type='hidden'  name='rid' value='$rid'>
<input type='hidden'  name='status' value='booked'>


<br><br>
<input type='submit' value='Go'></center>
</p>
</div></f>
</form></center>
<br><br><br><br><br><br><br><br><br><br><br>
";
}




 else if($mode_sel == 2 && $no_of_tickets <= $row['avalseats']  && $rid != '' && $name != '' && $email_id != '' && $mob != '' && $date != '') 
{

echo"<pub>
<font face='Cursive' font size='5' color='yellow'>Complete Your Payment</font></a>
</pub>
";


$sql="INSERT INTO passenger(pid,name,email,mob )
VALUES ('$pid','$name','$email_id','$mob')";

	if (!mysqli_query($con,$sql))
	{
  		die('Error: ' . mysqli_error($con));
}

$fare='';
$totalfare='';
$sql = "SELECT fare from route where rid ='$rid' " ; 
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());

}
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC))
{

$fare =$row['fare'];

}
$totalfare=$fare*$no_of_tickets;

echo"<h2><font face='Arial' font size='3' color='black'><center><br><br>Total Amount : 
&#8377;&#160;"."$fare "."  * "."$no_of_tickets "." Seat(s) = &#8377;    "."$totalfare "."/-</h2><br></font></center>";


echo"<form action='#' method='post'>
<center><div class='transbox'><br><br>
<font face='Arial' font size='6' color='black'>Select payment type&#160;:</font>
<select name='bank' >
<option value='dbbl'>DBBL</option>
<option value='bkash'>BKash</option>


</select>
<br><br>

<center>
<font face='Script MT' font size='6' color='black'>&#160;&#160;&#160;username :</font>
<input type='text' name='uname'>
<br><br>
<font face='Script MT' font size='6' color='black'>&#160;&#160;&#160;password :</font>
<input type='password' name='password'>
<input type='hidden'  name='no_of_tickets' value='$no_of_tickets'>
<input type='hidden'  name='pid' value='$pid'>
<input type='hidden'  name='rid' value='$rid'>
<input type='hidden'  name='status' value='booked'>

<br><br>
<br></center>
<center>
<input type='submit' value='Go'></center>
</p>
</div></center></f>
</form>
<br><br><br><br><br><br><br><br><br><br><br>


";
}






else if($mode_sel == 1  && $no_of_tickets > $row['avalseats']  && $rid != '' && $name != '' && $email_id != '' && $mob != ''  && $date != '') 
{

echo" <puk><font face='Cursive' font size='5' color='yellow'>Sorry.. Only " .$row['avalseats'] . " seats Are Available in selected Bus......</puk></font> ";
}


else if($mode_sel == 2  && $no_of_tickets > $row['avalseats']  && $rid != '' && $name != '' && $email_id != '' && $mob != '' && $date != '')
{

echo"<puk> <font face='Cursive' font size='5' color='yellow'>Sorry.. Only " .$row['avalseats'] . " seats Are Available in selected Bus...</puk> </font>";
}







else
{

echo "
<pub>
<font face='Cursive' font size='5' color='yellow'>Invalid Payment Option </font></a>
</pub>

<center><br><font face='Cursive' font size='6' color='blue'>or<br> You have not selected any Bus Route</center></font>
<center><br><font face='Cursive' font size='6' color='blue'>or<br> Fill the Form Correctly</center></font>

";



}







mysqli_close($con);
?>




<br>

<br><br><br>
<n>
<font face="Gunplay" font size="3" color="white"><h3>&#160;&#160;Easy Travel Bus Booking</h3></font>
			   	<font face="Gunplay" font size="2" color="white"><p>&#160;&#160;Dhaka, Bangladesh </p></font>
			    <ul >
			    <li><a href="about.html">	<font face="Gunplay" font size="2" color="#FFF">About</a> </li></font>
			 <li><a href="tc.html">	<font face="Gunplay" font size="2" color="white">Term of Services</a> </li></font>
			    	
			    </ul> 

<font face="Gunplay" font size="2" color="white">&#160;&#160;Easy Travel Copyright &copy; 2018-2019  all right reserved.&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
</font>
<img2> 
<img src="soc.png" />
</img2>

</n>

</body>
</html>

