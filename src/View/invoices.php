<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
	
	<!-- INVOICES -->

	<h2>Invoices</h2>
	<ol>
			<?php

		foreach ($result->getInvoices() as $key => $data) { ?>
			<li>
				<p><?php echo $data['invoiceNumber']." | ".$data['invoiceDate']." | ".$data['invoiceCompany'] ?></p>
			</li>

		<?php } ?>
	</ol>

	<a href=""><button type="button" class="btn btn-primary">Add a invoice</button></a>

</section>
<?php require 'includes/footer.php' ?>