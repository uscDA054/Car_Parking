
     <h3>Booking Details</h3>
	 
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>User</th>
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
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	
	<?php
		//show data in grideview
		$select = "select * from booking_tb,user_tb,floor_tb,rate_tb where booking_tb.book_userid = user_tb.user_id and booking_tb.book_floorid = floor_tb.flr_id and booking_tb.book_rateid = rate_tb.rate_id order by book_id DESC";
		$a = $con->query($select);
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
        <td class="center"><?php echo $v['user_name']; ?></td>
       
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
									  <a  href="Booking/Id/<?php echo encrypt_decrypt($v['book_id'],"e"); ?>/Status/<?php echo $v['book_status']; ?>">
                                    <span class="label label-success"><?php echo $v['book_status'];?></span></a>
                                    <?php 
                                    }
                                    else if($v['book_status']=="Complete")
                                    {
                                    ?>
									<a  href="Booking/Id/<?php echo encrypt_decrypt($v['book_id'],"e");?>/Status/<?php echo $v['book_status'];?>">
                                     <span class="label label-danger"><?php echo $v['book_status'];?></span></a>
                                    <?php } ?>
        </td>
        <td class="center"><?php echo $v['book_cdate'] ?></td>
        <td class="center">
            <a class="btn btn-danger" href="Booking/Delete/<?php echo encrypt_decrypt($v['book_id'],"e");?>" onclick="return confirm('Are you sure want to Delete..?')">
                Delete
            </a>
			
        </td>
    </tr>
	<?php } ?>
    </tbody>
    </table>
	<br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
   
	<?php
	if(isset($_REQUEST['booking_delete']))
	{
	 $del = encrypt_decrypt($_REQUEST['booking_delete'],"d");

	$dl = "delete from booking_tb where book_id ='$del'";
  		if($con->query($dl)==TRUE)
  		{
  		echo ("<script LANGUAGE='JavaScript'>window.location.href='Booking';</script>");
  		}
  	}
	
	
	if(isset($_REQUEST['booking_id']))
	{
	 $id = encrypt_decrypt($_REQUEST['booking_id'],"d");
     $status = $_REQUEST['booking_status'];
	 
	 if($_REQUEST['booking_status'] == 'Confirm')
	 {
		 $status = 'Complete';
		 
		 $sel="UPDATE `booking_tb` SET `book_status`='$status' where book_id='$id'";
  		if($con->query($sel)==TRUE)
  		{
  		echo ("<script LANGUAGE='JavaScript'>window.location.href='Booking';</script>");
  		}
	 }
		
  	}
	
  ?>



