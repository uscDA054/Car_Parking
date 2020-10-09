
<style>
.btn_1 {
    background: #c32143;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -o-border-radius: 2px;
    padding: 8px 25px;
    display: inline-block;
    color: #fff;
    text-transform: uppercase;
    outline: none;
    border: none;
    margin: 1em 0 0 0;
    font-size: 0.85em;
}
@media print {
  #printPageButton {
    display: none;
  }
}
</style>

<?php
if(isset($_REQUEST['name']))
{
	$name = "Name : ".$_REQUEST['name'];
	$email = "Email : ".$_REQUEST['email'];
	$flor = "Parking Floor : ".$_REQUEST['flor'];
	$spot = "Parking Spot : ".$_REQUEST['spot'];
	$todate = "Booking ToDate : ".$_REQUEST['todate'];
	$fromdate = "Booking FromDate : ".$_REQUEST['fromdate'];
	$price = "Price : ".$_REQUEST['price'];
	$vehicle = "Vehicle Number : ".$_REQUEST['vehicle'];
	$status = "Booking Status : ".$_REQUEST['status'];
	
?>  

<center>
<img src="https://chart.googleapis.com/chart?chs=400x400&cht=qr&chl=<?php echo $name." | ".$email." | ".$vehicle." | ".$flor." | ".$spot." | ".$todate." | ".$fromdate." | ".$price." | ".$status; ?>" />

<form method="post">
<p id="printPageButton"><input type="submit" value="Save PDF" class="btn_1 submit" onclick="window.print()" /></p>
</form>

<center>
<?php } ?>