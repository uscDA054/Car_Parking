<style>
	.welcome{
		font-size: 17px;
		font-family: initial;
		letter-spacing: 1px;
		line-height: 1.5;
		text-align: justify;
	}
	.spot{
		top: 20px;
		position: absolute;
		color: black;
		margin: 70px 26px;
		font-size: 20px;
		background: #ffffffab;
		padding: 5px;
		border-radius: 10px;
		font-weight: 700;
	}
	.divhov:hover{
		box-shadow: 10px 10px 5px grey;
	}
	.brate{
		font-size: 17px;
	}
	.arate{
		font-size: 19px;
		color: #fb9905;
		line-height: 3;
	}
	.bbrate{
		font-size: 17px;
		color: #fb9905;
	}
	.divbox{
		border: 1px black solid;
		border-radius: 5px;
		text-align: center;
		margin: 0px 50px;
		height: 235px;
	}
	.divbox1{
		border: 1px black solid;
		border-radius: 5px;
		text-align: center;
		margin: 0px 50px;
	}
</style>

<div class="col-md-12">

<div class="w3-content" style="max-width:100%">

  <img class="mySlides" src="upload/other/banner1.gif" style="width:100%; height:350px; border-radius:10px;">

  <img class="mySlides" src="upload/other/banner3.jpg" style="width:100%; height:350px; border-radius:10px;">
  
  <img class="mySlides" src="upload/other/banner4.jpg" style="width:100%; height:350px; border-radius:10px;">

</div>
<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); 
}
</script>
</div>

<div class="col-md-12" style="margin-top: 30px;">
	<h2 style="text-align: center; font-weight: 700; color: #fb9905;">Welcome to Car Park Management system</h2>
</div>

<div class="col-md-12" style="margin-top: 50px;">

	<div class="col-md-3">
		<img src="upload/other/banner4.jpg" style="width:100%; height:250px; border-radius:10px;">
	</div>
	
	<div class="col-md-9">
	<br/>
		<p class="welcome">
			A <b>Car Park Management system</b> is a mechanical device that multiplies parking capacity inside a parking lot. Parking systems are generally powered by electric motors or hydraulic pumps that move vehicles into a storage position.
		</p>
		
		<br/>
		<p class="welcome">
			Car parking systems may be traditional or automated. Automatic multi-storey automated car park systems are less expensive per parking slot, since they tend to require less building volume and less ground area than a conventional facility with the same capacity. In the long term, automated car parking systems are likely to be more cost effective than traditional parking garages. Car parking systems reduce exhaust gas — cars need not drive around in search of street parking spaces.
		</p>
		<br/>
			
	</div>

</div>

<div class="col-md-12" style="margin-top: 30px;">
	<h2 style="text-align: center; font-weight: 700; color: #fb9905;">Book Your Vehicle</h2>
</div>


<div class="col-md-12" style="margin-top: 50px;">

	<center class="divhov">
		<a href="" />
			<img src="upload/other/bookingcar.png" style="width:80%; height:300px" /> 
		</a>
	</center>

</div>

<div class="col-md-12" style="margin-top: 30px;">
	<h2 style="text-align: center; font-weight: 700; color: #fb9905;">Vehicle Parking Spot</h2>
</div>


<div class="col-md-12" style="margin-top: 50px;">

	<div class="col-md-2">
	<div class="divhov" >
		<img src="upload/other/twowheeler.jpg" style="width:100%; height:200px; border-radius: 5px;">
		<p class="spot" style="margin: 35px 26px;">Motoecycles <br/><b style="font-size: 14px;">Floor 1<sup>st</sup> <br/>Parking Spaces 30</b></p>
	</div>
	</div>
	
	<div class="col-md-4">
	<div class="divhov" >
		<img src="upload/other/4wheeler.jpg" style="width:100%; height:200px; border-radius: 5px;">
		<p class="spot" style="margin: 35px 140px; width: 150px;">Small Car &nbsp;&nbsp;&nbsp;<br/><b style="font-size: 14px;">Floor 1<sup>st</sup> - 3<sup>rd</sup> <br/>Parking Spaces 90</b></p>
	</div>
	</div>
	
	<div class="col-md-6">
	<div class="divhov" >
		<img src="upload/other/bigcar.jpg" style="width:100%; height:200px; border-radius: 5px;">
		<p class="spot" style="margin: 35px 230px; width: 150px;">Big Car <br/><b style="font-size: 14px;">Floor 4<sup>th</sup> - 10<sup>th</sup> <br/>Parking Spaces 280</b></p>
	</div>
	</div>


</div>


<div class="col-md-12" style="margin-top: 30px;">
	<h2 style="text-align: center; font-weight: 700; color: #fb9905;">Vehicle Parking Rate</h2>
</div>

<div class="col-md-12" style="margin-top: 30px;">

	<div class="col-md-4">
	<div class="divbox">
	<br/>
		<h4>Weekday Rates</h4>
		<b class="brate">Motorcycle :</b> <a class="arate"> $ 10/Day</a><br/>
		<b class="brate">Car :</b> <a class="arate"> $ 25/Day</a>
	</div>
	</div>
	
	<div class="col-md-4">
	<div class="divbox">
	<br/>
		<h4>Weekend Rates</h4>
		<b class="brate">Motorcycle :</b> <a class="arate"> $ 05/Day</a><br/>
		<b class="brate">Car :</b> <a class="arate"> $ 10/Day</a>
	</div>
	</div>
	
	<div class="col-md-4">
	<div class="divbox1">
	<br/>
		<h4>Hourly Rates</h4>
		<p style="line-height: 2;"><b class="bbrate">$20</b> for the <b class="bbrate">1<sup>st</sup> Hour</b> followed by <br/><b class="bbrate">$10</b> for every hour during <b class="bbrate">weekdays</b></p><br/>
		
		<p style="line-height: 2;"><b class="bbrate">$10</b> for the <b class="bbrate">1<sup>st</sup> Hour</b> followed by <br/><b class="bbrate">$05</b> for every hour during <b class="bbrate">weekends</b></p>
		
	</div>
	</div>

</div>