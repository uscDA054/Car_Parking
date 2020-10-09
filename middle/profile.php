<?php

	$id = $_SESSION['id'];
	
	$sel = "SELECT * FROM `user_tb` WHERE user_id='$id'";
	$selr = $con->query($sel);
	foreach($selr as $selv);


?>

<style type="text/css">
.carousel
	 {
	 	width: 476px;
		height: 380px;
		margin-top: 175px;
		margin-left: 0px;
		border-radius: 15px;
	 }
	 
	 @media (max-width: 767px)
	 {
	     .carousel{
	        margin-top: 55px;
			margin-left: 21px;
			width: 290px;
			height: 250px;
			border-radius: 15px;
	     }
	 }
</style>

<div class="col-md-2">
	<div class="ch-container">
    <div class="row">	
	<img src="upload/other/profile.jpg" class="carousel">
</div>
</div>
</div>
<div class="col-md-10">
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Welcome to Car Park Management system</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box" style="margin-right: 175px !important; width: 600px;">
            <form class="form-horizontal"  method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp; Name &nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" placeholder="Enter Name" value="<?php echo $selv['user_name']; ?>" name="name" required="" />
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">&nbsp;&nbsp; Contact &nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" placeholder="Enter Contact Number" value="<?php echo $selv['user_contact']; ?>"  name="contact" readonly required=""/>
                    </div>
                    <div class="clearfix"></div><br/>
					
					<div class="input-group input-group-lg">
                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" placeholder="Enter Email Address" value="<?php echo $selv['user_email']; ?>" name="email" required="" />
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">Postal Code</span>
                        <input type="text" class="form-control" placeholder="Enter Postal Code" value="<?php echo $selv['user_postalcode']; ?>"  name="postalcode" required=""/>
                    </div>
                    <div class="clearfix"></div><br>
					
					<div class="input-group input-group-lg">
                        <span class="input-group-addon">&nbsp; Password &nbsp;</span>
                        <input type="text" class="form-control" placeholder="Enter Password" value="<?php echo $selv['user_password']; ?>" name="password" required="" />
                    </div>
                    <div class="clearfix"></div>


                    <p class="center col-md-5">
                        <button type="submit" name="profile" class="btn btn-primary">Change Profile</button>
                    </p>
                </fieldset>
				<?php 
				if(isset($_REQUEST['profile']))
				{ 
				  // variable
				   $name = $_REQUEST['name'];
				   $email = $_REQUEST['email'];
				   $postalcode = $_REQUEST['postalcode'];
				   $password = $_REQUEST['password'];
				   
				   // Insert 
				   
				   $sel = "UPDATE `user_tb` SET `user_name`='$name',`user_email`='$email',`user_postalcode`='$postalcode',`user_password`='$password',`user_cdate`='$date' WHERE `user_id`='$id'";
				   
				   if($con->query($sel) == TRUE)
				   {
						 header("location:index.php?file=home");
				   }
				     
				}
				?>
				
            
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->
</div>
</div>