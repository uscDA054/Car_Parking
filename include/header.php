<?php session_start(); ?>
        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Home" style="margin-top: -5px;"> <img alt="Car Park Management system" src="upload/other/carparking.gif" style="height: 50px; width: 90px; background-color: white; border-radius: 7px; margin-top: -10px" class="hidden-xs"/> </a>
                

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs">  <a href="index.php?file=home">Home</a></span> 
                </button>
				
				<?php if(isset($_SESSION['id'])) { ?>
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=profile"> Profile</a></span>
                </button>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=carbooking">Booking</a></span>
                </button>
				
				<?php } else {?>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=signup">Booking</a></span>
                </button>
				<?php } ?>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=parkingspot">Parking Spots</a></span>
                </button>
				
				<?php if(isset($_SESSION['id'])) { ?>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=mybooking"> My Booking</a></span>
                </button>
				
				<?php } else { ?>
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=signup"> Sign up</a></span>
                </button>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=login">Sign in</a></span>
                </button>
				
				<?php } ?>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs">  <a href="index.php?file=about">About Us</a></span> 
                </button>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=contact"> Contact Us</a></span>
                </button>
				
				<?php if(isset($_SESSION['id'])) { ?>
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="index.php?file=logout"> Logout</a></span>
                </button>
				<?php } ?>
				
				
            </div>
            <!-- user dropdown ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"> <span style="font-size: 25px; font-weight: 700; font-family: none;">Car Park Management system</span></a></a></li>
                
                
            </ul>

        </div>