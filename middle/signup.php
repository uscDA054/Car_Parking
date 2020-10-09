<style type="text/css">
.carousel
	 {
	 	width: 380px;
		height: 380px;
		margin-top: 175px;
		margin-left: 86px;
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
	<img src="upload/other/Registration.png" class="carousel">
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
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" required="" />
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">&nbsp;&nbsp; Contact &nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" placeholder="Enter Contact Number"  name="contact" required=""/>
                    </div>
                    <div class="clearfix"></div><br/>
					
					<div class="input-group input-group-lg">
                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;&nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input type="text" class="form-control" placeholder="Enter Email Address" name="email" required="" />
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">Postal Code</span>
                        <input type="text" class="form-control" placeholder="Enter Postal Code"  name="postalcode" required=""/>
                    </div>
                    <div class="clearfix"></div><br>
					
					<div class="input-group input-group-lg">
                        <span class="input-group-addon">&nbsp; Password &nbsp;</span>
                        <input type="password" class="form-control" placeholder="Enter Password" name="password" required="" />
                    </div>
                    <div class="clearfix"></div>


                    <p class="center col-md-5">
                        <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                    </p>
                </fieldset>
				<?php 
				if(isset($_REQUEST['signup']))
				{ 
				
					$contact = $_REQUEST['contact'];
					
					$check = "select * from user_tb where user_contact='$contact'";
					$checkr = $con->query($check);
					if(mysqli_num_rows($checkr) > 0){
						echo "<script>alert('This Contact Number Already Register, Please Try Another Contact Number');</script>";
					}else{
				  // variable
				   $name = $_REQUEST['name'];
				   $contact = $_REQUEST['contact'];
				   $email = $_REQUEST['email'];
				   $postalcode = $_REQUEST['postalcode'];
				   $password = $_REQUEST['password'];
				   
				   // Insert 
				   
				   $sel = "INSERT INTO `user_tb`(`user_name`, `user_contact`, `user_email`, `user_postalcode`, `user_password`, `user_cdate`) VALUES ('$name','$contact','$email','$postalcode','$password','$date')";
				   
				   if($con->query($sel) == TRUE)
				   {
						 header("location:Signin");
				   }
				   
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