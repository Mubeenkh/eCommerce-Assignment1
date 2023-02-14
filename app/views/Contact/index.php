<?php $this->view('shared/header','Contact Us'); ?>
	<h1>Contact us</h1>
	<p>Wanna reach us? Write your email information and message in the following form and then submit.</p>

	<!-- My code  -->
<!-- 	<form>
		<div >
			<label>Email:</label>
				<input type="email" name="email"  >
		</div>
		<div >
			<label >Message:</label>
			<textarea  ></textarea>
		</div>
		<div>
			<input  type="submit" name="submit" value="Send!">
		
		</div>
	</form> 
-->
	<!-- My code mixed with Bootstrap's CSS -->
	<form class="d-grid gap-3" method="post" action="">

		<div class="form-group row">

			<label  class="col-sm-2 col-form-label">Email:</label>
			<div class="col-sm-10">
				<input type="email" name="email" class="form-control" /> 
			</div>

		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Message:</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="message"></textarea>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label"></label>
			<div class="col-sm-10">
				<input class="form-control" type="submit" name="action" value="Send!"/>
			</div>
			
		</div>

	</form>
	
	
	
<?php $this->view('shared/footer'); ?>