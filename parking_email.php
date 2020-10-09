<?php

	if(isset($_REQUEST["name"]))
	{
	
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$flor = $_REQUEST['flor'];
		$spot = $_REQUEST['spot'];
		$vehicle = $_REQUEST['vehicle'];
		$todate = $_REQUEST['todate'];
		$fromdate = $_REQUEST['fromdate'];
		$price = "$".$_REQUEST['price'];
		$status = $_REQUEST['status'];
		
		$to = $email;
      
		$from = "melbourneparking12345@gmail.com";
	
		// set content-type for sending HTML email
			$headers = "MIME-Version: 1.0\r\n";
			$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			// Create email headers
			$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();  
		
		$subject = "E-Parking System Booking Details";		 

        $htmlContent = "<form method=post><html><body>";

		$htmlContent .= "<div style='background-color: #fb9905; height: 80px;'><h2 style='color: white;padding-top: 25px;'><b style='padding-left: 25px;'>Car Parking System</b></h2></div>";
		
		$htmlContent .= "<div style='margin-left: 0; padding: 18px;'><p style='margin:5px; font-style: italic;'>Hello ".$name.",</p><br/><table style='font-family: arial, sans-serif;border-collapse: collapse;width: 100%;'><thead><tr><th colspan='2' style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #fb9905; color: white; border: 2px solid  #fb9905'>Car Parking Booking Deatils</th></tr></thead>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Name</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>".$name."</td></tr>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #dddddd; color: black'>Email ID</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #dddddd; color: black'>".$email."</td></tr>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Vehicle Number</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>".$vehicle."</td></tr>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #dddddd; color: black'>Parking Floor</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #dddddd; color: black'>".$flor."</td></tr>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Parking Spot</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>".$spot."</td></tr>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #dddddd; color: black'>Booking To-Date</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #dddddd; color: black'>".$todate."</td></tr>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>Booking From-Date</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px;'>".$fromdate."</td></tr>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #dddddd; color: black'>Booking Price</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; background-color: #dddddd; color: black'>".$price."</td></tr>";
		
		$htmlContent .= "<tr><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; color: black'>Booking Status</td><td style='border: 1px solid #dddddd;text-align: left;padding: 8px; color: black'>".$status."</td></tr></table></div>";
		
		$htmlContent .= "<center><a href='http://localhost:8080/Car_Parking/index.php?file=QRcode&name=".$name."&email=".$email."&flor=".$flor."&spot=".$spot.".&todate=".$todate."&fromdate=".$fromdate."&price=".$price."&status=".$status."&vehicle=".$vehicle."' target='_black' style='background-color: #fb9905;color: white;padding: 10px 25px;border-radius: 8px;text-decoration: none;'>GET YOUR QR CODE</a></center>";
		
		$htmlContent.= "</body></html></form>";
		
		mail($to,$subject,$htmlContent,$headers);

			
		echo "<script>window.location='http://localhost:8080/Car_Parking/index.php?file=QRcode&name=$name&email=$email&flor=$flor&spot=$spot&todate=$todate&fromdate=$fromdate&price=$price&status=$status&vehicle=$vehicle';</script>";
		
	}
?>
	