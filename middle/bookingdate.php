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
<div class="col-md-2">
&nbsp;
</div>

<div class="col-md-8">
	
	<form role="form" method="post" enctype="multipart/form-data">
		
		<div class="form-group col-md-3">
			<label for="exampleInputFile">&nbsp;</label>
			
		</div>
		<div class="form-group col-md-6">
			<center><label for="exampleInputFile">Vehicle Number</label></center>
			<input type="text" class="form-control" name="vnumber"/>
		</div>
		<div class="form-group col-md-3">
			<label for="exampleInputFile">&nbsp;</label>
			<br/><br/><br/>
		</div>
		
		<div class="form-group col-md-12">
			<center><input type="submit" name="bookingcar" value="Submit" class="btn btn-success btn-sm" />&nbsp;&nbsp;
			<input type="reset" name="clear" value="Clear" class="btn btn-danger btn-sm" /></center>
		</div>
		
	</form>
</div>

<div class="col-md-2">
&nbsp;
</div>
</div>


<?php
	
	if(isset($_REQUEST['bookingcar']))
	{
		$floorid = $_REQUEST['floorid'];
		$floorspot = $_REQUEST['floorspot'];
		
		$startdate = $_REQUEST['startdate'];
		$starttime = $_REQUEST['starttime'];
		
		$enddate = $_REQUEST['enddate'];
		$endtime = $_REQUEST['endtime'];
		
		$starttimedate =  $_REQUEST['startdate']." ".$_REQUEST['starttime'];
		$endtimedate = 	$_REQUEST['enddate']." ".$_REQUEST['endtime'];
		
		$order   = array("-", " ", ":");
		$replace = array("", "", "");
		$sdate =  str_replace($order, $replace,$starttimedate);
		$edate =  str_replace($order, $replace,$endtimedate);
		
		$checkbooking = "SELECT * FROM `booking_tb` where book_floorid='$floorid' and book_floorspot='$floorspot'";
		$checkbookingr = $con->query($checkbooking);
		if(mysqli_num_rows($checkbookingr) > 0){
		foreach($checkbookingr as $checkbookingv)
		{
			
			$startfind_timedate = $checkbookingv['book_todate']." ".$checkbookingv['book_totime'];
			$endfind_timedate =  $checkbookingv['book_fromdate']." ".$checkbookingv['book_fromtime'];
			
			$sfinddate =  str_replace($order, $replace,$startfind_timedate);
			$efinddate =  str_replace($order, $replace,$endfind_timedate);

			if($sdate > $sfinddate && $sdate > $efinddate){
			  if($edate < $sfinddate || $edate > $sfinddate){
				  if($edate < $efinddate || $edate > $efinddate){
					
					$insertbooking = 200;
					
					} 
				}
			}else{
									  
				$insertbooking = 201;
			  
			}
		}
		}else{
			$insertbooking = 200;
		}
				
		if($insertbooking == 200){		
	
			$userid = $_SESSION['id'];
			
			$vehicle = $_REQUEST['vehicle'];
			
			$vnumber = $_REQUEST['vnumber'];
			$status = "Confirm";
			
			$startdatetime = $startdate." ".$starttime;
			$enddatetime = $enddate." ".$endtime;
			
			 $start_date = new DateTime($startdatetime);
			$since_start = $start_date->diff(new DateTime($enddatetime));

			
			$day = $since_start->d;
			$hours = $since_start->h;
			$min = $since_start->i;
			
			$timediff = $day."-".$hours."-".$min;
			
			$dt1 = strtotime($enddate);
			$dt2 = date("l", $dt1);
			$dt3 = strtolower($dt2);
			if(($dt3 == "saturday" )|| ($dt3 == "sunday"))
				{
					$findrate = "SELECT * FROM `rate_tb` where rate_days='Weekend' and rate_vehicletype='$vehicle'";
					$findrater = $con->query($findrate);
					
					$billamount = 0;
					$rateday = 0;
					$ratehours = 0;
					$ratehoursrepeat = 0;
					
					foreach($findrater as $findratev){
					
					$rateid = $findratev['rate_id'];
					
						if($findratev['rate_time'] == 'Day'){
							$rateday = $findratev['rate_rate'];
						} 
						if($findratev['rate_time'] == 'Hour'){
							$ratehours = $findratev['rate_rate'];
							$ratehoursrepeat = $findratev['rate_rate'] / 2;
						}
						}
						
						if($day > 0) {
							$billamount += $rateday * $day;
						}
						if($hours > 0) {
							if($hours == 1){
								$billamount += $ratehours * $hours;
								
							}
							else{
								$billamount += $ratehours * 1;
								$hoursrepeat = $hours - 1;
								$billamount += $ratehoursrepeat * $hoursrepeat;
								
							}
							
						}
						if($min > 0){
								$billamount += $ratehoursrepeat * 1;
							}
				} 
			else
				{
					$findrate = "SELECT * FROM `rate_tb` where rate_days='Week Day' and rate_vehicletype='$vehicle'";
					$findrater = $con->query($findrate);
					
					$billamount = 0;
					$rateday = 0;
					$ratehours = 0;
					$ratehoursrepeat = 0;
					
					foreach($findrater as $findratev){
						$rateid = $findratev['rate_id'];
						
						if($findratev['rate_time'] == 'Day'){
							$rateday = $findratev['rate_rate'];
						}
						if($findratev['rate_time'] == 'Hour'){
							$ratehours = $findratev['rate_rate'];
							$ratehoursrepeat = $findratev['rate_rate'] / 2;
							
						}
						}
						
						if($day > 0) {
							$billamount += $rateday * $day;
						}
						if($hours > 0) {
							if($hours == 1){
								$billamount += $ratehours * $hours;
								
							}
							else{
								$billamount += $ratehours * 1;
								$hoursrepeat = $hours - 1;
								$billamount += $ratehoursrepeat * $hoursrepeat;
							}
							
						}
						if($min > 0){
								$billamount += $ratehoursrepeat * 1;
							}
						
					
				}
			
				$bookins = "INSERT INTO `booking_tb`(`book_userid`, `book_floorid`, `book_floorspot`, `book_rateid`, `book_vehiclenumber`, `book_todate`, `book_fromdate`, `book_totime`, `book_fromtime`, `book_timediff`, `book_totalprice`, `book_status`, `book_cdate`) VALUES ('$userid','$floorid','$floorspot','$rateid','$vnumber','$startdate','$enddate','$starttime','$endtime','$timediff','$billamount','$status','$date')";
			
			if($con->query($bookins) == TRUE){
			
				$bid = $con->insert_id;
				$uid = $_SESSION['id'];
				
				header("location:index.php?file=paypal&bid=".$bid."&uid=".$uid);
			}
		
		}else{
		?>
			<h3 style="text-align: center; color: red;">Sorry, Vehicle already  Booked for same Time <br/>Please Try for Another time.</h3>
		<?php }
		
	}

 ?>




















