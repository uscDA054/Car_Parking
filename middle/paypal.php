<?php
$bookid = $_REQUEST['bid'];
$userid = $_REQUEST['uid'];

$sel = "select * from booking_tb,user_tb,floor_tb where booking_tb.book_userid=user_tb.user_id and booking_tb.book_floorid=floor_tb.flr_id and booking_tb.book_id='$bookid' and booking_tb.book_userid='$userid' and book_status='Confirm'";

$selr = $con->query($sel);

foreach($selr as $selv);

$name = $selv['user_name'];
$email = $selv['user_email'];
$flor = $selv['flr_name'];
$spot = $selv['book_floorspot'];
$vehicle = $selv['book_vehiclenumber'];
$todate = $selv['book_todate']." ".$selv['book_totime'];
$fromdate = $selv['book_fromdate']." ".$selv['book_fromtime'];
$price = $selv['book_totalprice'];
$status = $selv['book_status'];

?>



<style>
.paypal{
position: absolute;
color: white;
font-weight: 700;
left: 117px;
top: 40px;
font-size: 75px;
text-align: center;
}
.paybtn1{
background: #029ce0;
color: white !important;
font-size: 25px;
padding: 20px 75px;
font-weight: 900;
border-radius: 12px;
margin-top: 30px !important;
position: absolute;
text-align: center;
text-decoration: none !important;
margin-left: 60px;
border: 1px;
}
.paybtn2{
background: #159a15e0;
color: white !important;
font-size: 25px;
padding: 20px 75px;
font-weight: 900;
border-radius: 12px;
margin-top: 175px !important;
position: absolute;
text-align: center;
text-decoration: none !important;
}
.paylogo{
width: 150px;
position: absolute;
background: white;
border-radius: 10px;
top: 10px;
left: 25px;
}
.note{
position: absolute;
margin-top: 320px;
border: 2px red solid;
padding: 10px 20px;
font-size: 20px;
text-align: justify;
border-radius: 5px;
}
</style>


<div class="col-md-6">
<img class="paylogo" src="upload/other/paypal.png" />
<h1 class="paypal">Welcome <br/>To <br/>Paypal</h1>

<video style="width:558px; height:488px" autoplay="autoplay" loop controls >
<source src="https://www.paypalobjects.com/marketing/web/in/home/IN_everyday_essentials_desktop_v2.mp4" type="video/mp4">
</video>

</div>

<div class="col-md-6">

<a class="paybtn1" href="https://www.paypal.com/in/home" target="_blank" style="display:none">
PAYMENT IN PAYPAL

</a>


<form id="referralForm" name="referralForm" method="post">
<input type="hidden" name="currency_code" value="AUD">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="melbourneparking12345@gmail.com">

<input type="hidden" name="item_name_1" value="Parking fees">
<input type="hidden" name="amount_1" value="<?php echo $selv['book_totalprice']; ?>">


<input class="paybtn1" type="submit" onClick="FormSubmission();" name="click" value="PAYMENT IN PAYPAL">
</form>

<!--<form method="post">
<input class="paybtn1" type="submit" name="click" value="PAYMENT IN PAYPAL" />
</form> -->

<br/>
<a class="paybtn2" href="index.php?file=mybooking" >
CHECK YOUR BOOKING STATUS
</a>

<p class="note">
Once your payment has been made in PayPal you can view your booking status on CHECK YOUR BOOKING STATUS and the booking details will be emailed to your registed email with <b>QR CODE</b>.
</p>

<script type="text/javascript">

			function SalesForceSubmission()
			{ 
			  
			  
			   document.referralForm.action = "https://www.sandbox.paypal.com/cgi-bin/webscr";
			   document.referralForm.submit();         
			   return true;
			   
			  
			 
			  
			}

			function FormSubmission()
			{
			
			   window.open("http://theartzone.in/parking_email.php?name=<?php echo $selv['user_name'];?>&email=<?php echo $selv['user_email'];?>&flor=<?php echo $selv['flr_name'];?>&spot=<?php echo $selv['book_floorspot'];?>&todate=<?php echo $selv['book_todate']." ".$selv['book_totime'];?>&fromdate=<?php echo $selv['book_fromdate']." ".$selv['book_fromtime'];?>&price=<?php echo $selv['book_totalprice'];?>&status=<?php echo $selv['book_status'];?>&vehicle=<?php echo $selv['book_vehiclenumber'];?>");
			   
			   SalesForceSubmission();    
			   return true;
			   
			   
			}
</script>


<?php
/*
if(isset($_REQUEST['click'])){

$name = $selv['user_name'];
$email = $selv['user_email'];
$flor = $selv['flr_name'];
$spot = $selv['book_floorspot'];
$vehicle = $selv['book_vehiclenumber'];
$todate = $selv['book_todate']." ".$selv['book_totime'];
$fromdate = $selv['book_fromdate']." ".$selv['book_fromtime'];
$price = $selv['book_totalprice'];
$status = $selv['book_status'];




echo "<script>window.open('http://theartzone.in/parking_email.php?name=$name&email=$email&flor=$flor&spot=$spot&todate=$todate&fromdate=$fromdate&price=$price&status=$status&vehicle=$vehicle');</script>";
//echo "<script>window.open('https://www.sandbox.paypal.com/cgi-bin/webscr');</script>";

}

*/

?>

</div>






























