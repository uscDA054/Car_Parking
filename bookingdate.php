<style>
	.welcome{
		font-size: 17px;
		font-family: initial;
		letter-spacing: 1px;
		line-height: 1.5;
		text-align: justify;
	}
	.soptset{
		color: white;
		padding: 15px 5px;
		font-size: 25px;
		height: 70px;
		margin-top: 10px;
		text-align: center;
	}
	.soptgreen{
		background: #0080008a;
		border: 2px green solid;
	}
	.soptred{
		border: 2px red solid;
		background: #ff00008a;
	}
	.stopttitle{
		margin-left: 15px;
		font-size: 17px;
		background: #fb9905;
		color: white;
		padding: 4px;
		border-radius: 5px;
	}
	
</style>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="col-md-12" style="margin-top: 30px;">
	<h2 style="text-align: center; font-weight: 700; color: #fb9905;">Book Your Vehicle For Parking </h2>
</div>


<div class="col-md-12" style="margin-top: 40px;">
<div class="col-md-2">
&nbsp;
</div>

<div class="col-md-8">
	
	<form role="form" method="post" enctype="multipart/form-data">
		
		<div class="form-group col-md-3">
			<label for="exampleInputFile">&nbsp;</label>
			
		</div>
		<div class="form-group col-md-6">
			<center><label for="exampleInputFile">Vehicle Number</label></center>
			<input type="text" class="form-control" name="vnumber"/>
		</div>
		<div class="form-group col-md-3">
			<label for="exampleInputFile">&nbsp;</label>
			<br/><br/><br/>
		</div>
		
		
		<div class="form-group col-md-3">
			<label for="exampleInputFile">Start Date</label>
			<input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" name="startdate"/>
		</div>
		<div class="form-group col-md-3">
			<label for="exampleInputFile">Start Time</label>
			<input type="time" class="form-control" name="starttime"/>
		</div>
		<div class="form-group col-md-3">
			<label for="exampleInputFile">End Date</label>
			<input type="date" class="form-control" min="<?php echo date('Y-m-d'); ?>" name="enddate"/>
		</div>
		<div class="form-group col-md-3">
			<label for="exampleInputFile">End Time</label>
			<input type="time" class="form-control" name="endtime"/>
		</div>
		
		<div class="form-group col-md-12">
			<center><input type="submit" name="bookingcar" value="Submit" class="btn btn-success btn-sm" />&nbsp;&nbsp;
			<input type="reset" name="clear" value="Clear" class="btn btn-danger btn-sm" /></center>
		</div>
		
	</form>
</div>

<div class="col-md-2">
&nbsp;
</div>
</div>















