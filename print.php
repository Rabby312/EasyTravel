<html>

<head>

<title>Easy Travel</title>
</head>
<style>

k{


color:green;
font-size:20px;

background-color:#f28858;
height:100px;
width:1345px;
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
	width: 1345px;
	position:absolute;
        top:97;
         right:0px;
}

nav ul{
list-style-type:none;
float:right;
}
nav li{
float:left;
margin-right:12px;
}

div{
position:absolute;
top:200px;
right:80px;

border:1px solid black;
background:skyblue;
width:400px;
border-radius:15px;
}











body
{
background-color:white;
}


pub{

text-align:center;	

background-color: blue;

position:absolute;
	height: 42px;
	width: 440px;
        top:145;
        left:460px;
}


puk{

text-align:center;	

background-color: blue;

position:absolute;
	height: 53px;
	width: 300px;
        top:145;
        left:520px;
}



</style>


<k>

<nav>
 <ul >
			 <li><a href="index.html"><font face="Gunplay" font size="4" color="white">HOME</a></li></font>	
				            <li><a href="about.html"><font face="Gunplay" font size="4" color="white">About</a></li></font>
				          <li><a href="mybookings.html"><font face="Gunplay" font size="4" color="white">My Booking</a></li></font>
					 <li><a href="cancellation.html"><font face="Gunplay" font size="4" color="white">Cancellation</a></li></font>
				            <li><a href="support.html"><font face="Gunplay" font size="4" color="white">Support</a></li></font>
				            <li><a href="contact.html"><font face="Gunplay" font size="4" color="white">Contact Us</a></li></font>
				          </ul></nav>

<imgl> 
&#160;&#160;&#160;&#160;<img src="images/logo1.png" alt="" height="75px" width="150px" />
</imgl>
</k>






<br><br><br><br><br><br><br><br>
<?php
$con=mysqli_connect("localhost","root","","bus_ticket");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }






$pnr='';
$mob='';

if (isset($_POST['pnr']))
{
$pnr=$_POST['pnr'];
}

if (isset($_POST['mob']))
{
$mob=$_POST['mob'];
}

$sql = "SELECT email,name,pnr,bid,fromLoc,toLoc,dep_date,dep_time ,arr_time,fare,mob,status FROM reserves,passenger,route WHERE passenger.pid = reserves.pid and pnr='$pnr' and mob ='$mob' and reserves.rid=route.rid " ;
$retval = mysqli_query( $con, $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
echo " ticket number doesn't exists";
}
$row=mysqli_fetch_array($retval);
if ($row['mob'] == $_POST['mob'] &&  $pnr != '' && $mob!= '')
{

echo"

<puk>
<font face='Impact' font size='9' color='yellow'>Your Ticket</font>
</puk>

<br><br><br>
<center><table border='3' style='border-color: black; cellspacing='11' cellpadding='11' ;'width =70%'><h2>

<tr><th>PNR :<th> " .$pnr . " <th>Name :<th> ". $row['name'] . "</tr>
<tr><th>Date :  <th>". $row['dep_date'] . "<th>Mobile :<th> ". $row['mob'] . "</tr>


<tr><th>Time : <th>". $row['dep_time'] ."<th>Email : <th>". $row['email'] . "  </tr>
<tr><th>Bus_id : <th>". $row['bid'] . "<th>Status<th> <font face='Franklin Gothic' font size='4' color='red'>". $row['status'] . "</font></tr>
<tr><th>". $row['fromLoc'] . "    <th>to&#160;&#160; ". $row['toLoc'] . "  
<th>Fare :<th>&#8377;&#160;". $row['fare'] . "/-</tr>




</table>

<br><form action='printmulti.php' method='post'><input type='hidden'  name='pnr[]'  value=". $row['pnr']."</form><input type='submit' value='print'>

</center>"
;
}

else
{
echo "

<pub>
<font face='Bernard MT' font size='6' color='yellow'>Invalid PNR Or Mobile number</font></a>
</pub>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
";

}




mysqli_close($con);
?>




<br><br><br><br>


<n>
<font face="Gunplay" font size="3" color="white"><h3>&#160;&#160;Easy Travel Bus Booking</h3></font>
			   	<font face="Gunplay" font size="2" color="white"><p>Dhaka, Bangladesh </p></font>
			    <ul >
			    <li><a href="about.html">	<font face="Gunplay" font size="2" color="white">About</a> </li></font>
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