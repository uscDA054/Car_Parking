<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo $_SERVER["PHP_SELF"];?>" />
	<title>Car Park Management system</title>
	
	<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
    <link rel="shortcut icon" href="upload/other/carparking.png">
	
	<?php include_once("include/connectivity.php");?> 
	
	<?php 
	if(isset($_REQUEST['file']))
	{
	   $filename = $_REQUEST['file'];
	}
	else if($_SERVER['QUERY_STRING']=="")
	{
	  header("location:Home");
	  exit();
	}
	else
	{
	   header("location:Home");
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
  
    <div class="navbar navbar-default" role="navigation" style="background: #fb9905; border: 1px #fb9905 solid;">
     		<?php
				include_once("include/header.php");
			?>
    </div>

    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">

        <div id="content" class="col-lg-12 col-sm-12">

    <?php
			//Date and time (Upadate and create date)
			date_default_timezone_set("Australia/Sydney");
			$date = date('Y-m-d h:i:s');
			
	
			// file calling    
			include_once("middle/".$filename.".php");
	?>
    
    
    </div>
</div>

			
   <br/><br/><br/> <hr>
    <footer class="row">
	  <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="Home" >Car Park Management system</a> <?php echo date('Y'); ?></p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Design by: <a
                href="#">Divyang | Aditya | Anil</a></p>

     </footer>
</div>
</body>
</html>
<?php ob_flush();?>