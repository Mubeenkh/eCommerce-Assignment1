<?php $this->view('shared/header','Contact Us'); ?>
	<h1>Contact us - messages sent</h1>
	
	<?php 
		// $data is the content thats being passed on from controllers/Contact.php
		foreach ($data as $content) { 
		
			$content = json_decode($content);
	?>
		<!-- htmlentities prevents users from writing scripts -->
		<div><b> <?= htmlentities($content->email ?? '') ?> </b></div>
		<p> <?= htmlentities($content->message ?? '')?> </p>
	
	<?php 
		} 
	?>

<?php $this->view('shared/footer'); ?>