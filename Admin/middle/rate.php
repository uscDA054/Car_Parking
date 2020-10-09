
        <h3>Add Rate Details</h3>
        
        <!------- Add Form------>       
			<form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
                   <div class="form-group">
                        <label for="exampleInputFile">Vehicle Type</label>
                        <select class="form-control" name="vetype" >
                            <option value="0">--Select--</option>
                            <option value="Car">Car</option>
                            <option value="Motorcycle">Motorcycle</option></select>
                   </div>
                  
                    <div class="form-group">
                        <label for="exampleInputFile">Rate Days</label>
                        <select class="form-control" name="days" >
                            <option value="0">--Select--</option>
                            <option value="Week Day">Week Day</option>
                            <option value="Weekend">Weekend</option></select>
                   </div>	

                    <div class="form-group">
                       <label for="exampleInputFile">Rate Time</label>
                        <select class="form-control" name="time" >
                            <option value="0">--Select--</option>
                            <option value="Day">Day</option>
                            <option value="Hour">Hour</option></select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Rate</label>
                        <input type="text" name="rate" placeholder="Enter Rate Amount" id="rate"  class="form-control" required />
                    </div>					
					  

                    <div class="form-group col-mad-12">
                    <input type="submit" name="add_rate" value="Submit" class="btn btn-success btn-sm" />
					</div>
                </form>
				<br />
	  <!------- Add Form End------> 
           
<?php 
if(isset($_REQUEST['add_rate']))
{
	$vetype = $_REQUEST['vetype'];
	$days = $_REQUEST['days'];
    $time = $_REQUEST['time'];
	$rate = $_REQUEST['rate'];

	
	 $insert = "insert into rate_tb(rate_vehicletype,rate_days,rate_time,rate_rate)values('$vetype','$days','$time','$rate')";
	
	if($con->query($insert)==TRUE)
	{
	   echo ("<script LANGUAGE='JavaScript'>window.location.href='Rate';</script>");
	}
}
?>
    <h3>Rate Details</h3>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
		<th>Vehicle Type</th>
        <th>Rate Days</th>
        <th>Rate Time</th>
		<th>Rate Amount</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	
	<?php
		//show data in grideview
		$select = "select * from rate_tb order by rate_id DESC";
		$a = $con->query($select);
		$j=1;
		foreach($a as $v)
		{
		?>
    	<tr>
        <td><?php echo $j++; ?> </td>
		<td><span class="label-success label label-<?php if($v['rate_vehicletype']== "Car"){?>default<?php } else {?>danger<?php } ?>"><?php echo $v['rate_vehicletype'];?></span></td>
        <td><span class="label-success label label-<?php if($v['rate_days']== "Week Day"){?>default<?php } else {?>danger<?php } ?>"><?php echo $v['rate_days'];?></span></td>
		<td><span class="label-success label label-<?php if($v['rate_time']== "Day"){?>default<?php } else {?>danger<?php } ?>"><?php echo $v['rate_time'];?></span></td>
		<td class="center">$<?php echo $v['rate_rate'] ?></td>
	
        <td class="center">
            <a class="btn btn-info" href="Rate/Edit/<?php echo encrypt_decrypt($v['rate_id'],"e");?>">
                Edit
            </a>
            <a class="btn btn-danger" href="Rate/Delete/<?php echo encrypt_decrypt($v['rate_id'],"e");?>" onclick="return confirm('Are you sure want to Delete..?')">
                Delete
            </a>
			
        </td>
    </tr>
	<?php } ?>
    </tbody>
    </table>
   
	<?php
	if(isset($_REQUEST['rate_delete']))
	{
	 $del = encrypt_decrypt($_REQUEST['rate_delete'],"d");

	$dl = "delete from rate_tb where rate_id ='$del'";
  		if($con->query($dl)==TRUE)
  		{
  		echo ("<script LANGUAGE='JavaScript'>window.location.href='Rate';</script>");
  		}
  	}
  ?>

