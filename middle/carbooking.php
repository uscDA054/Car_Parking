<style>
	.welcome{
		font-size: 17px;
		font-family: initial;
		letter-spacing: 1px;
		line-height: 1.5;
		text-align: justify;
	}
	.soptset{
		color: white;
		padding: 15px 5px;
		font-size: 25px;
		height: 70px;
		margin-top: 10px;
		text-align: center;
	}
	.soptgreen{
		background: #0080008a;
		border: 2px green solid;
	}
	.soptred{
		border: 2px red solid;
		background: #ff00008a;
	}
	.stopttitle{
		margin-left: 15px;
		font-size: 17px;
		background: #fb9905;
		color: white;
		padding: 4px;
		border-radius: 5px;
	}
	
</style>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="col-md-12" style="margin-top: 30px;">
	<h2 style="text-align: center; font-weight: 700; color: #fb9905;">Book Your Vehicle For Parking </h2>
</div>


<div class="col-md-12" style="margin-top: 40px;">
<div class="col-md-3">
&nbsp;
</div>

<div class="col-md-6">
	
	<form role="form" method="post" enctype="multipart/form-data">
		
		<div class="form-group">
			<label for="exampleInputFile">Select Vehicle Type</label>
			<select class="form-control" name="vehicletype" >
				<option value="0">--- Select Vehicle Type ---</option>
				<option value="Motorcycle">Motorcycle</option>
				<option value="Car">Car</option>
			</select>
		</div>
		
		<div class="form-group col-md-12">
			<input type="submit" name="type" value="Submit" class="btn btn-success btn-sm" />&nbsp;&nbsp;
			<input type="reset" name="clear" value="Clear" class="btn btn-danger btn-sm" />
		</div>
		
	</form>
</div>

<div class="col-md-3">
&nbsp;
</div>
</div>


<?php
	
	if(isset($_REQUEST['type'])){
	
	$vtype = $_REQUEST['vehicletype'];
	
	 echo ("<script LANGUAGE='JavaScript'>window.location.href='index.php?file=carbooking&ptype=".$vtype."';</script>");
	
	}
?>

<?php if(isset($_REQUEST['ptype'])){ ?>
<div class="col-md-12" style="margin-top: 40px;">
<div class="col-md-3">
&nbsp;
</div>

<div class="col-md-6">
	
	<form role="form" method="post" enctype="multipart/form-data">
		
		Your Vehicle is : <?php echo $_REQUEST['ptype']; ?>
		<input type="hidden" name="cartype" value="<?php echo $_REQUEST['ptype']; ?>" />
		<?php if($_REQUEST['ptype'] == "Car") { ?>
		<div class="form-group">
			<label for="exampleInputFile">Select Vehicle Type</label>
			<select class="form-control" name="carmode" >
				<option value="0">--- Select Vehicle Type ---</option>
				<option value="Small">Small</option>
				<option value="Big">Big</option>
			</select>
		</div>
		
		<?php } else { ?>
		<input type="hidden" name="cartype" value="<?php echo $_REQUEST['ptype']; ?>" />
		<div class="form-group">
			<label for="exampleInputFile">Select Vehicle Type</label>
			<select class="form-control" name="carmode" >
				<option value="0">--- Select Vehicle Type ---</option>
				<option value="Small">Small</option>
			</select>
		</div>
		<?php } ?>
		
		
		<div class="form-group col-md-6">
			<label for="exampleInputFile">Start Date</label>
			<input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" name="startdate"/>
		</div>
		<div class="form-group col-md-6">
			<label for="exampleInputFile">Start Time</label>
			<input type="time" class="form-control" name="starttime"/>
		</div>
		<div class="form-group col-md-6">
			<label for="exampleInputFile">End Date</label>
			<input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" name="enddate"/>
		</div>
		<div class="form-group col-md-6">
			<label for="exampleInputFile">End Time</label>
			<input type="time" class="form-control" name="endtime"/>
		</div>
		
		<div class="form-group col-md-12">
			<input type="submit" name="mode" value="Submit" class="btn btn-success btn-sm" />&nbsp;&nbsp;
			<input type="reset" name="clear" value="Clear" class="btn btn-danger btn-sm" />
		</div>
		
	</form>
</div>

<div class="col-md-3">
&nbsp;
</div>

</div>

<?php
	
	if(isset($_REQUEST['mode'])){
	
	$vmode = $_REQUEST['carmode'];
	$cartype1 = $_REQUEST['cartype'];
	
	$startdate = $_REQUEST['startdate'];
	$starttime = $_REQUEST['starttime'];

	$enddate = $_REQUEST['enddate'];
	$endtime = $_REQUEST['endtime'];
	
	 echo ("<script LANGUAGE='JavaScript'>window.location.href='index.php?file=carbooking&ptype=".$cartype1."&pmode=".$vmode."&startdate=".$startdate."&starttime=".$starttime."&enddate=".$enddate."&endtime=".$endtime."';</script>");
	
	}
?>

<?php } ?>


<?php if(isset($_REQUEST['pmode'])){ ?>
<div class="col-md-12">
	<h3>Your Vehicle Type is <?php echo $_REQUEST['ptype']; ?> and Model is <?php echo $_REQUEST['pmode']; ?>. </h3>
	
	<h3 style="color: #fb9905;">Start Time : <?php echo $_REQUEST['startdate']." ".$_REQUEST['starttime']; ?> and End Time : <?php echo $_REQUEST['enddate']." ".$_REQUEST['endtime']; ?> </h3>
</div>


<?php 

$booktype = $_REQUEST['ptype'];
$bookmode = $_REQUEST['pmode'];

$startdate = $_REQUEST['startdate'];
$starttime = $_REQUEST['starttime'];

$enddate = $_REQUEST['enddate'];
$endtime = $_REQUEST['endtime'];

$starttimedate =  $_REQUEST['startdate']." ".$_REQUEST['starttime'];
$endtimedate = 	$_REQUEST['enddate']." ".$_REQUEST['endtime'];

if($booktype == 'Motorcycle'){
	$carbooking = $booktype;
}
else{
	$carbooking = $bookmode." ".$booktype;
}

$sel = "SELECT * FROM `floor_tb` where flr_forspace='$carbooking'";
$selr = $con->query($sel);
foreach($selr as $selv){

		$fid = $selv['flr_id'];
		
		$str = $selv['flr_space'];
		$abc = explode("-",$str);

		 $start = $abc[0];
		 $end = $abc[1];
?>
   
<div class="col-md-12">
	<h3><?php echo $selv['flr_name']; ?></h3>
	<br/>
	
	<b class="stopttitle"> <?php echo $selv['flr_forspace']; ?></b>
</div>


<div class="col-md-12" style="border-bottom: 2px #fb9905 solid;">

	<?php 
	$tool = $start;
	
	for($x = $start; $x <= $end; $x++){
	
	$book = "SELECT * FROM `booking_tb`,floor_tb where booking_tb.book_floorid=floor_tb.flr_id and booking_tb.book_floorid='$fid' and booking_tb.book_floorspot='$x' and booking_tb.book_status='Confirm'";
	$bookr = $con->query($book);
	$msg = 0;
	if(mysqli_num_rows($bookr) > 0) {
	$bookinglist = "";
	foreach($bookr as $bookv){
	
	$bookv['book_id'];
	
	$sdateampm = $bookv['book_todate'];
	$edateampm = $bookv['book_fromdate'];
	
	$stimeampm = date("g:i A", strtotime($bookv['book_totime']));
	$etimeampm = date("g:i A", strtotime($bookv['book_fromtime']));
	
	$sdate = $bookv['book_todate']." ".$bookv['book_totime'];
	$edate = $bookv['book_fromdate']." ".$bookv['book_fromtime'];
	
	$bookinglist .= $sdateampm." ".$stimeampm." TO ".$edateampm." ".$etimeampm." | ";
	
	$order   = array("-", " ", ":");
	$replace = array("", "", "");
	$comdate1 =  str_replace($order, $replace,$sdate);
	$comdate2 =  str_replace($order, $replace,$edate);
	
	date_default_timezone_set("Australia/Sydney");
	 
	$comdate3 =  str_replace($order, $replace,$starttimedate);
	$comdate4 =  str_replace($order, $replace,$endtimedate);
	
	
	if($comdate4 > $comdate1 && $comdate4 < $comdate2){
		$msg = 1;
	}
	else{
		if($comdate3 < $comdate1 && $comdate3 < $comdate2 && $comdate4 > $comdate1 && $comdate4 > $comdate2)
		{ 
			$msg = 1;			
		}
	}
	
	if($comdate3 > $comdate1 && $comdate3 < $comdate2){
		$msg = 1;
	}
	else{
		if($comdate3 < $comdate1 && $comdate3 < $comdate2 && $comdate4 > $comdate1 && $comdate4 > $comdate2)
		{ 
			$msg = 1;			
		}
	}
	
	
	}
	}
	else{
		$bookinglist = "No Booking";
	}
	
	?>
	
	<a <?php if($msg != 1){ ?> href="index.php?file=bookingdate&floorid=<?php echo $fid; ?>&floorspot=<?php echo $x; ?>&vehicle=<?php echo  $_REQUEST['ptype']; ?>&startdate=<?php echo $_REQUEST['startdate']; ?>&starttime=<?php echo $_REQUEST['starttime']; ?>&enddate=<?php echo  $_REQUEST['enddate']; ?>&endtime=<?php echo  $_REQUEST['endtime']; ?>" <?php } ?> data-toggle="tooltip<?php echo $tool; ?>" title="<?php echo $bookinglist; ?>">
		<div class="col-md-1">
			<p class="soptset <?php if($msg == 1){ ?>soptred<?php } else {?> soptgreen <?php } ?>">
				<?php echo $x; ?>
			</p>
		</div>
	</a>
		
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();   
	});
	</script>
	
	<?php $tool++; } ?>
		
	
</div>

<?php } ?>

<?php } ?>




















