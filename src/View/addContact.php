<?php require 'includes/header.php' ?>

<h2>Add a contact form</h2>

<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"> Contact Name</label>
    <input type="text" name="addContactName" required class="form-control" id="exampleInputEmail1" placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"> Phone Number</label>
    <input type="tel" name="addContactPhoneNumber" required class="form-control" placeholder="Phone number">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Email</label>
    <input type="email" name="addContactEmail" required class="form-control"  placeholder="Enter Email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Company Name</label>
    <input type="text" name="addContactCompanyName" required class="form-control" id="exampleInputEmail1" placeholder="Enter company name">
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php require 'includes/footer.php' ?>