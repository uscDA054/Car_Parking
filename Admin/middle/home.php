<style type="text/css">
.divheight{
	height: 60px;
	font-size: 20px;
}
	.countfont{
		font-size: 20px;
}
</style>

 <div class="row">
 
	<div class="col-md-4">
		<?php
		//show data in grideview
		$select = "select count(user_id) as A from user_tb";
		$a = $con->query($select);
		foreach($a as $userv);
		
		?>
		<a data-toggle="tooltip" class="well top-block" href="User">
			<div class="divheight">Total User</div>
			<div class="countfont"><?php echo $userv['A'] ?></div>
			<span class="notification"><?php echo $userv['A'] ?></span>
		</a>
	</div>
	<div class="col-md-4">
		<?php
		//show data in grideview
		$select = "select count(flr_id) as B from floor_tb";
		$a = $con->query($select);
		foreach($a as $floorv);
		
		?>
		<a data-toggle="tooltip" class="well top-block" href="Floor">
			<div class="divheight">Total Floor</div>
			<div class="countfont"><?php echo $floorv['B'] ?></div>
			<span class="notification"><?php echo $floorv['B'] ?></span>
		</a>
	</div>
	<div class="col-md-4">
	    <?php
		//show data in grideview
		$select = "select count(rate_id) as C from rate_tb";
		$a = $con->query($select);
		foreach($a as $ratev);
		
		?>
		<a data-toggle="tooltip" class="well top-block" href="Rate">
			<div class="divheight">Total Rate</div>
			<div class="countfont"><?php echo $ratev['C'] ?></div>
			<span class="notification"><?php echo $ratev['C'] ?></span>
		</a>
	</div>
	<div class="col-md-4">
		<?php
		//show data in grideview
		$select = "select count(book_id) as D from booking_tb";
		$a = $con->query($select);
		foreach($a as $bookv);
		
		?>
		<a data-toggle="tooltip" class="well top-block" href="Booking">
			<div class="divheight">Total Booking</div>
			<div class="countfont"><?php echo $bookv['D'] ?></div>
			<span class="notification"><?php echo $bookv['D'] ?></span>
		</a>
	</div>
  
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
 
 
