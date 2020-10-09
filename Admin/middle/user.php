

        <h3> User Details</h3>
		
		<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>PostalCode</th>
		<th>Password</th>
        <th>Create Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
	
	<?php
		//show data in grideview
		$select = "select * from user_tb order by user_id DESC";
		$a = $con->query($select);
		$j=1;
		foreach($a as $v)
		{
		?>
    	<tr>
        <td><?php echo $j++; ?> </td>
        <td class="center"><?php echo $v['user_name'] ?></td>
        <td class="center"><?php echo $v['user_contact'] ?></td>
        <td class="center"><?php echo $v['user_email'] ?></td>
		<td class="center"><?php echo $v['user_postalcode'] ?></td>
		<td class="center"><?php echo $v['user_password'] ?></td>
		<td class="center"><?php echo $v['user_cdate'] ?></td>
        <td class="center">
            <a class="btn btn-danger" href="User/Delete/<?php echo encrypt_decrypt($v['user_id'],"e");?>" onclick="return confirm('Are you sure want to Delete..?')">
                Delete
            </a>
			
        </td>
    </tr>
	<?php } ?>
    </tbody>
    </table>
    <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
       
    
	<?php
	if(isset($_REQUEST['user_delete']))
	{
	 $del = encrypt_decrypt($_REQUEST['user_delete'],"d");

	$dl = "delete from user_tb where user_id ='$del'";
  		if($con->query($dl)==TRUE)
  		{
  		echo ("<script LANGUAGE='JavaScript'>window.location.href='User ';</script>");
  		}
  	}
  ?>
  
  
  
  
  
   
  
 