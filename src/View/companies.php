<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
	
	<!-- INVOICES -->

	<h2>Companies List</h2>
	<ol>
			<?php

		foreach ($result->getCompanies() as $key => $data) { ?>
			<li>
				<p><?php echo $data['companyName']." | ".$data['VAT']." | ".$data['country']." | ".$data['companyType'] ?></p>
			</li>

		<?php } ?>
	</ol>

	<a href=""><button type="button" class="btn btn-primary">Add a company</button></a>


</section>
<?php require 'includes/footer.php' ?>