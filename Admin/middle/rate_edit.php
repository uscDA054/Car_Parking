<?php
	
	if(empty($_REQUEST['rate_edit']))
			{
				echo ("<script LANGUAGE='JavaScript'>window.location.href='Rate';</script>");
			}
				
			$edt= encrypt_decrypt($_REQUEST['rate_edit'],"d");
			$updt = "select * from rate_tb where rate_id='$edt'";
			$qryex = $con->query($updt);
			foreach($qryex as $v);
			
    ?>

<!-----Edit Form---->
                <h3>Change Rate Details</h3>

                <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
				 
                    <div class="form-group">
                        <label for="exampleInputFile">Vehicle Type</label>
                        <select name="vetype" class="form-control" required>
						   <option value="">--Select--</option>
						   <?php 
						   if($v['rate_vehicletype']=='Car')
						   {
						   ?>
						   <option value="Car" selected="selected">Car</option>
						   <option value="Motorcycle">Motorcycle</option>
						   <?php 
						   }
						   else if($v['rate_vehicletype']==='Motorcycle')
						   {
						  ?>
						  <option value="Car">Car</option>
						   <option value="Motorcycle" selected="selected">Motorcycle</option>
						  
						  <?php  } ?>
							
						  </select>
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Rate Days</label>
                        <select name="days" class="form-control" required>
						   <option value="">--Select--</option>
						   <?php 
						   if($v['rate_days']=='Week Day')
						   {
						   ?>
						   <option value="Week Day" selected="selected">Week Day</option>
						   <option value="Weekend">Weekend</option>
						   <?php 
						   }
						   else if($v['rate_days']==='Weekend')
						   {
						  ?>
						  <option value="Week Day">Week Day</option>
						   <option value="Weekend" selected="selected">Weekend</option>
						  
						  <?php  } ?>
							
						  </select>
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Rate Time</label>
                        <select name="time" class="form-control" required>
						   <option value="">--Select--</option>
						   <?php 
						   if($v['rate_time']=='Day')
						   {
						   ?>
						   <option value="Day" selected="selected">Day</option>
						   <option value="Hour">Hour</option>
						   <?php 
						   }
						   else if($v['rate_time']==='Hour')
						   {
						  ?>
						  <option value="Day">Day</option>
						   <option value="Hour" selected="selected">Hour</option>
						  
						  <?php  } ?>
							
						  </select>
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Rate</label>
                        <input type="text" name="rate" placeholder="Enter Rate Amount" value="<?php echo $v['rate_rate']; ?>" id="rate"  class="form-control" required />
                    </div>
                   <div class="form-group">
                    <input type="submit" name="edit_rate" class="btn btn-primary" value="Change Details" />
                   </div>
				   
				</form>
<!-----Edit Form End---->
          
<?php 
if(isset($_REQUEST['edit_rate']))
{
	
	$vetype = $_REQUEST['vetype'];
	$days = $_REQUEST['days'];
    $time = $_REQUEST['time'];
	$rate = $_REQUEST['rate'];
	
		
	$upd="update rate_tb set rate_vehicletype='$vetype',rate_days='$days',rate_time='$time',rate_rate='$rate' where rate_id='$edt'";
	
	if($con->query($upd)==TRUE)
	{
	 echo ("<script LANGUAGE='JavaScript'>window.location.href='Rate';</script>");
	}
}
?>

