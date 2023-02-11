<?php $this->view('shared/header', 'About Us Page'); ?>
	<h1>About Us</h1>
	<p>See my incredible team of ducks.</p>
	<div class="about-content">
		<div class="d-flex align-content-between flex-wrap">
		
			<img class="rounded" src="/app/Images/ducks1.jpg" width="250px">  
	        <p class="d-flex align-items-center">Baby duck learning from Mother duck</p>

		</div>
	    <div class="d-flex align-content-between flex-wrap">
			
			<img class="rounded" src="/app/Images/ducks2.jpg" width="250px">  
	        <p class="d-flex align-items-center">Billy Hiding from the bugs in the code</p>

		</div>


	</div>
<?php $this->view('shared/footer'); ?>