<?php require 'includes/header.php' ?>

<main id="login">
    <div class="container">
        <section id="content">
            <form method="post" action="index.php?link=register">
                <h1>Register Form <?php if(isset($test)){ echo $test;} ?></h1>
                <div>
                    <input type="email" placeholder="Email" required="" id="username" name="registerMail" />
                </div>
                <div>
                    <input type="password" placeholder="Password" required="" id="password" name="registerPassword" />
                </div>
                <div>
                    <input type="password" placeholder="Confirm Password" required="" id="password" name="confirmPassword" />
                </div>
                <div>
                    <input type="submit" value="Register" name="createButton" />
                    <!--         <a href="#">Lost your password?</a>
        <a href="#">Register</a> -->
                </div>
            </form><!-- form -->

        </section><!-- content -->
    </div><!-- container -->
</main>

<?php require 'includes/footer.php' ?>