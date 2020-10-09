
<?php
	
	if(empty($_REQUEST['floor_edit']))
			{
				echo ("<script LANGUAGE='JavaScript'>window.location.href='Floor';</script>");
			}
				
			$edt= encrypt_decrypt($_REQUEST['floor_edit'],"d");
			$updt = "select * from floor_tb where flr_id='$edt'";
			$qryex = $con->query($updt);
			foreach($qryex as $v);
			
?>
<!-----Edit Form---->
                <h3>Change Floor Details</h3>

                 <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <label for="exampleInputFile">Floor Name</label>
                        <input type="text" name="name" placeholder="Enter Floor Name" value="<?php echo $v['flr_name']; ?>" id="exampleInputFile"  class="form-control" required />
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Floor Space</label>
                        <input type="text" name="flrspace" placeholder="Enter Floor Space" value="<?php echo $v['flr_space']; ?>" id="exampleInputFile"  class="form-control" required />
                    </div>
					<div class="form-group">
                        <label for="exampleInputFile">Floor ForSpace</label>
                        <input type="text" name="flrforspace" placeholder="Enter Floor ForSpace" value="<?php echo $v['flr_forspace']; ?>" id="exampleInputFile"  class="form-control" required />
                    </div>
				   
                   <div class="form-group">
                    <input type="submit" name="edit_floor" class="btn btn-primary" value="Change Details" />
					</div>
				</form>
<!-----Edit Form End---->
          
<?php 
if(isset($_REQUEST['edit_floor']))
{
	
	$name = $_REQUEST['name'];
	$flrspace = $_REQUEST['flrspace'];
	$flrforspace = $_REQUEST['flrforspace'];
	
		
	$upd="update floor_tb set flr_name='$name',flr_space='$flrspace',flr_forspace='$flrforspace' where flr_id='$edt'";
	
	if($con->query($upd)==TRUE)
	{
	 echo ("<script LANGUAGE='JavaScript'>window.location.href='Floor';</script>");
	}
}
?>