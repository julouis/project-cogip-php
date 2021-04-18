<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

	<!-- 5 LASTS INVOICES -->

	<h2>Last Invoices</h2>
	<ol>
			<?php

		foreach ($result->getLastInvoices() as $key => $data) { ?>
			<li>
				<p><?php echo $data['invoiceNumber']." | ".$data['invoiceDate']." | ".$data['invoiceCompany'] ?></p>
			</li>

		<?php } ?>
	</ol>


<!-- 5 LASTS PEOPLE ENCODED IN DATABASE -->

<h2>Last Contacts</h2>
	<ol>
			<?php

		foreach ($result->getLastContacts() as $key => $data) { ?>
			<li>
				<p><?php echo $data['contactName']." | ".$data['phoneNumber']." | ".$data['email']." | ".$data['company'] ?></p>
			</li>

		<?php } ?>
	</ol>

<!-- 5  LASTS COMPANIES ENCODED IN DATABASE -->
<h2>Last Companies</h2>
	<ol>
			<?php

		foreach ($result->getLastCompanies() as $key => $data) { ?>
			<li>
				<p><?php echo $data['companyName']." | ".$data['VAT']." | ".$data['country']." | ".$data['companyType'] ?></p>
			</li>

		<?php } ?>
	</ol>


</section>
<?php require 'includes/footer.php' ?>