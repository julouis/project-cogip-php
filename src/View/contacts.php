<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>
	
	<!-- CONTACTS -->

	<h2>Contacts List</h2>
	<ol>
			<?php

		foreach ($result->getContacts() as $key => $data) { ?>
			<li>
				<p><?php echo $data['contactName']." | ".$data['phoneNumber']." | ".$data['email']." | ".$data['company'] ?></p>
			</li>

		<?php } ?>
	</ol>

	<a href="/index.php?link=addContact"><button type="button" class="btn btn-primary">Add a contact</button></a>
</section>
<?php require 'includes/footer.php' ?>