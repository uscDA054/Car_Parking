<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo $_SERVER["PHP_SELF"];?>" />
	<title>Admin | Car Park Management system</title>
	
	<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
    <link rel="shortcut icon" href="../upload/other/carparking.png">
	
	<?php include_once("include/connectivity.php");?> 
	
	<?php 
	if(isset($_REQUEST['file']))
	{
	   $filename = $_REQUEST['file'];
	}
	else if($_SERVER['QUERY_STRING']=="")
	{
	  header("location:Login");
	  exit();
	}
	else
	{
	   header("location:Login");
	   exit();
	}
	
	if(!file_exists(getcwd()."/middle/".$_REQUEST['file'].".php"))
	{
		header("location:Error");
	    exit();
	
	}

	// data encrypt - decrypt set
     function encrypt_decrypt($id,$action)
			{
				if($action=='e')
					{
						return(urlencode(base64_encode($id)));
					}
			    else if($action=='d')
				   {
						return(base64_decode(urldecode($id)));
					}
				
			}

			
	?> 
</head>

<body>
    <!-- topbar starts -->
    <?php
		if($filename!='login') 
		{
	?>
    <div class="navbar navbar-default" role="navigation">
     		<?php
				include_once("include/header.php");
			?>
    </div>
<?php }?>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
                <?php 
				if($filename!='login')
				{
				?>
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <?php include_once("include/left_bar.php");?>
        </div>
		<?php } ?>
        <!--/span-->
        <!-- left menu ends -->
               <?php 
				if($filename!='login')
				{
				?>
        
        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            <div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php?file=home">Home</a>
        </li>
        <li>
            <a href="#"><?php echo  ucfirst($filename);?></a>
        </li>
    </ul>
</div>
<?php } ?>

    <?php
			//Date and time (Upadate and create date)
			date_default_timezone_set("Australia/Sydney");
			$c_date = date('Y-m-d h:i:s');
			$u_date = date('Y-m-d h:i:s');
			
	
			// file calling
			include_once("middle/".$filename.".php");
	?>
    
    <!--/span-->
    <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

				<?php 
				if($filename!='login')
				{
				?>
   <br/><br/><br/> <hr>
    <footer class="row">
	  <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="Home" >Car Park Management system</a> <?php echo date('Y'); ?></p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Design by: <a
                href="#">Divyang | Aditya | Anil</a></p>

     </footer>
	<?php } ?>
</div><!--/.fluid-container-->
</body>
</html>
<?php ob_flush();?>