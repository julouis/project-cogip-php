<?php require 'includes/header.php' ?>

<main id="login">
<div class="container">
  <section id="content">
    <form action="">
      <h1>Login Form</h1>
      <div>
        <input type="text" placeholder="Username" required="" id="username" />
      </div>
      <div>
        <input type="password" placeholder="Password" required="" id="password" />
      </div>
      <div>
        <input type="submit" value="Log in" />
        <a href="#">Lost your password?</a>
        <a href="/index.php?link=register">Register</a>
      </div>
    </form><!-- form -->
    
  </section><!-- content -->
</div><!-- container -->
</main>

<?php require 'includes/footer.php' ?>