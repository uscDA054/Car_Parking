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

<div class="col-md-12" style="margin-top: 30px;">
	<h2 style="text-align: center; font-weight: 700; color: #fb9905;">Our Vehicle Parking Spots</h2>
</div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   

<?php 

$sel = "SELECT * FROM `floor_tb`";
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
	$datecheck = date('Y-m-d G:i');

	$comdate3 =  str_replace($order, $replace,$datecheck);
	
	if($comdate1 < $comdate3 && $comdate3 < $comdate2)
	{ 
		$msg = 1 ;
	}
	
	}
	}else{
		$bookinglist = "No Booking";
	}
	
	
	?>
	
	<a href="#" data-toggle="tooltip<?php echo $tool; ?>" title="<?php echo $bookinglist; ?>">
		<div class="col-md-1">
			<p class="soptset  <?php if($msg == 1){ ?>soptred<?php } else {?> soptgreen <?php } ?>">
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
