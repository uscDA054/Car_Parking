<?php 
session_start();
if(empty($_SESSION["admin_login"]) || empty($_SESSION["last_seen"]))
{
 header("location:Login");
}
?>
        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Home" style="margin-top: -5px;"> <img alt="Car Park Management system" src="../upload/other/carparking.gif" style="height: 50px; width: 90px; background-color: white; border-radius: 7px; margin-top: -10px" class="hidden-xs"/> </a>
                

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <?php if(!empty($_SESSION["admin_login"])) { echo $_SESSION["admin_login"];} ?></span> 
                </button>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> Last Visit : <?php if(!empty($_SESSION["last_seen"])) { echo $_SESSION["last_seen"];} ?></span>
                </button>
				
				<button class="btn btn-default dropdown-toggle" style="margin-right: 10px;">
                   <span class="hidden-sm hidden-xs"> <a href="Logout">Logout</a></span>
                </button>
				
            </div>
            <!-- user dropdown ends -->

            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="#"> <span style="font-size: 25px; font-weight: 700; font-family: none;">Car Park Management system</span></a></a></li>
                
                
            </ul>

        </div>