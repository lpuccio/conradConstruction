<p class="lead">We look forward to meeting you!</p>
<p>Please fill out and submit the form below and one of our representatives will be in touch with you at our earliest opportunity. We never send spam or sell personal information.</p>
<form id="contactusForm" method="post" action="php/handlecontactus.php">
	<div class="row">
		<div class="col-xs-12 col-sm-2">
			<small>*First Name:</small>
		</div>
		<div class="col-xs-12 col-sm-4">
			<input type="text" name="firstName" utofocus required />
		</div>
		<div class="col-xs-12 col-sm-2">
			<small>*Last Name:</small>
		</div>
		<div class="col-xs-12 col-sm-4">
			<input type="text" name="lastName" required />
		</div>

	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-2">
			<small>Email:</small>
		</div>
		<div class="col-xs-12 col-sm-4">
			<input type="email" name="email" />
		</div>
		<div class="col-xs-12 col-sm-2">
			<small>*Phone:</small>
		</div>
		<div class="col-xs-12 col-sm-4">
			<input type="tel" name="phone" required  />
		</div>

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-2">
			<small>*Address:</small>
		</div>
		<div class="col-xs-12 col-sm-10">
			<input type="text" name="address" required />
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-2">
			<small>*Project Description:</small>
		</div>
		<div class="col-xs-12 col-sm-10">
			<input type="text" name="project" required />
		</div>

	</div>
	<div class="row">
		<div class="col-xs-12">
			<label class="" for="captcha">*Please enter the verication code shown below.</label>
		</div>	
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-5 col-md-4">
			<div id="captcha-wrap">
			    <img src="img/refresh.jpg" alt="refresh captcha" id="refresh-captcha" /> <img src="php/newCaptcha.php" alt="" id="captcha" />
			</div>
		</div>
		<div class="col-xs-12 col-sm-3">
			<input class="narrow text input" required id="captcha" name="captcha" type="text"/>
		</div>
		<div class="col-sm-2 col-md-3 col-xs-12">
		</div>
		<div class="col-xs-12 col-sm-2">
			<input type="submit" value="Submit"/>
		</div>
	</div>
</form>