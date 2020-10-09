<style>
	.welcome{
		font-size: 17px;
		font-family: initial;
		letter-spacing: 1px;
		line-height: 1.5;
		text-align: justify;
	}
	table{
		border: 1px black solid;
		width: 100%;
		margin-top: 50px;
	}
	th,td{
		border: 1px black solid;
		padding: 4px;
		text-align: center;
	}
	
</style>

<div class="col-md-12">

<table>
	<tr>
		<th>No.</th>
        <th>Floor</th>
		<th>Parking Spot</th>
		<th>Vehicle Type</th>
		<th>Rate Days</th>
		<th>Rate Time</th>
		<th>Vehicle NO.</th>
        <th>Booking To Date-Time</th>
		<th>Booking From Date-Time</th>
		<th style="width: 70px;">Total Time</th>
		<th>Total Price</th>
		<th>Status</th>
		<th>Create Date</th>
	</tr>
	
	<?php
		
		$userid = $_SESSION['id'];
		//show data in grideview
		$select = "select * from booking_tb,user_tb,floor_tb,rate_tb where booking_tb.book_userid = user_tb.user_id and booking_tb.book_floorid = floor_tb.flr_id and booking_tb.book_rateid = rate_tb.rate_id and user_tb.user_id='$userid' order by book_id DESC";
		$a = $con->query($select);
		if(mysqli_num_rows($a) > 0){
		$j=1;
		foreach($a as $v)
		{
		$diff = $v['book_timediff'];
		
		 $diff1 = explode("-",$diff);
		 
		 $day = $diff1[0];
		 $hour = $diff1[1];
		 $min = $diff1[2];
		?>
    	<tr>
        <td><?php echo $j++; ?> </td>
       
        <td class="center"><?php echo $v['flr_name'] ?></td>
		<td class="center"><?php echo $v['book_floorspot'] ?></td>
		
		<td><span class="label-success label label-<?php if($v['rate_vehicletype']== "Car"){?>default<?php } else {?>danger<?php } ?>"><?php echo $v['flr_forspace'];?></span></td>
        <td><span class="label-success label label-<?php if($v['rate_days']== "Week Day"){?>default<?php } else {?>danger<?php } ?>"><?php echo $v['rate_days'];?></span></td>
		<td><span class="label-success label label-<?php if($v['rate_time']== "Day"){?>default<?php } else {?>danger<?php } ?>"><?php echo $v['rate_time'];?></span></td>
		
		<td class="center"><?php echo $v['book_vehiclenumber'] ?></td>
		<td class="center"><?php echo $v['book_todate']." ".$v['book_totime']; ?></td>
		<td class="center"><?php echo $v['book_fromdate']." ".$v['book_fromtime']; ?></td>
		<td class="center"><?php echo $day." Day<br/>".$hour." Hours<br/>".$min." Min"; ?></td>
		<td class="center">$<?php echo $v['book_totalprice'] ?></td>
        <td class="center">
            <?php
                                     if($v['book_status']=="Confirm")
                                     {
                                     ?>
									  
                                    <span class="label label-success"><?php echo $v['book_status'];?></span>
                                    <?php 
                                    }
                                    else if($v['book_status']=="Complete")
                                    {
                                    ?>
									
                                     <span class="label label-danger"><?php echo $v['book_status'];?></span>
                                    <?php } ?>
        </td>
        <td class="center"><?php echo $v['book_cdate'] ?></td>
        
    </tr>
	<?php } } else {  ?>
		<tr>
			<td colspan="13"><b style="color: red;">Sorry, No Any Booking Record Yet..!</b></td>
		</tr>
	<?php } ?>
<table>

</div>