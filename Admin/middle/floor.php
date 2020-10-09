
 <h3>Add Floor Details</h3>
        
<!-- Add Form -->
               
			<form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label for="exampleInputFile">Floor Name</label>
                        <input type="text" name="name" placeholder="Enter Floor Name" id="exampleInputFile"  class="form-control" required />
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputFile">Floor Space</label>
                        <input type="text" name="flrspace" placeholder="Enter Floor Space" id="exampleInputFile"  class="form-control" required />
                    </div>	

                    <div class="form-group">
                        <label for="exampleInputFile">Floor ForSpace</label>
                        <input type="text" name="flrforspace" placeholder="Enter Floor ForSpace" id="exampleInputFile"  class="form-control" required />
                    </div>						
					  

                    <div class="form-group">
                    <input type="submit" name="add_floor" value="Submit" class="btn btn-success btn-sm" />
					</div>
                </form>
				<br />
          
<!-- Add Form  End -->



<?php 
if(isset($_REQUEST['add_floor']))
{
	$name = $_REQUEST['name'];
	$flrspace = $_REQUEST['flrspace'];
    $flrforspace = $_REQUEST['flrforspace'];
	
	 $insert = "insert into floor_tb(flr_name,flr_space,flr_forspace)values('$name','$flrspace','$flrforspace')";
	
	if($con->query($insert)==TRUE)
	{
	   echo ("<script LANGUAGE='JavaScript'>window.location.href='Floor';</script>");
	}
}
?>

 <h3>Floor Details</h3>

       
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
		<th>Name</th>
        <th>Space</th>
        <th>For Space</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	
	<?php
		//show data in grideview
		$select = "select * from floor_tb order by flr_id DESC";
		$a = $con->query($select);
		$j=1;
		foreach($a as $v)
		{
		?>
    	<tr>
        <td><?php echo $j++; ?> </td>
        <td class="center"><?php echo $v['flr_name'] ?></td>
       
        <td class="center"><?php echo $v['flr_space'] ?></td>
       
        <td class="center"><?php echo $v['flr_forspace'] ?></td>
	
        <td class="center">
            <a class="btn btn-info" href="Floor/Edit/<?php echo encrypt_decrypt($v['flr_id'],"e");?>">Edit </a>
           
            <a class="btn btn-danger" href="Floor/Delete/<?php echo encrypt_decrypt($v['flr_id'],"e");?>" onclick="return confirm('Are you sure want to Delete..?')"> Delete </a>
        </td>
    </tr>
	<?php } ?>
    </tbody>
    </table>
   
	<?php
	if(isset($_REQUEST['floor_delete']))
	{
	 $del = encrypt_decrypt($_REQUEST['floor_delete'],"d");

	$dl = "delete from floor_tb where flr_id ='$del'";
  		if($con->query($dl)==TRUE)
  		{
  		echo ("<script LANGUAGE='JavaScript'>window.location.href='Floor';</script>");
  		}
  	}
  ?>
	
