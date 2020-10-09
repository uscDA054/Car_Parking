<style type="text/css">
.carousel
	 {
	 	width: 380px;
		height: 300px;
		margin-top: 125px;
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
	<img src="upload/other/login.jpg" class="carousel">
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
        <div class="well col-md-5 center login-box" style="margin-right: 225px !important; width: 550px;">
            <div class="alert alert-info">
                Please login with your User Name and Password.
            </div>
            <form class="form-horizontal"  method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"> Contact No. </i></span>
                        <input type="text" class="form-control" placeholder="Enter Contact Number" name="username" required="" />
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">&nbsp; Password &nbsp;</span>
                        <input type="password" class="form-control" placeholder="Enter Password"  name="password" required=""/>
                    </div>
                    <div class="clearfix"></div>


                    <p class="center col-md-5">
                        <button type="submit" name="sub1" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
				<?php 
				if(isset($_REQUEST['sub1']))
				{ 
				  // variable
				   $a = $_REQUEST['username'];
				   $b = $_REQUEST['password'];
				   
				   
				   // select query
				   $sel = "select * from user_tb where user_contact = '$a' and user_password = '$b'";
				   $r=$con->query($sel);
				   if(mysqli_num_rows($r) > 0)
				   {
				      foreach($r as $v)
					  {
					    session_start();
						$_SESSION['contact'] = $v['user_contact'];
						$_SESSION['id'] = $v['user_id'];
						
						header("location:index.php?file=home");
						
					  }
					  
				   }
				   else
				   {
				   ?>
				   <div class="alert alert-info">
                    Please Valid Enter your Username and Password..!!
                   </div>
				   <?php 
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