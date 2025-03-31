<!-- header file -->
<?php require ('./inc/header.php'); ?>
  <main>
    <section class="masthead">
      <div>
        <h1>Assignment 2 User Authentication</h1>
      </div>
    </section>
<!-- -->
    <section class="formRow row">
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Login below</h3>
        <form method="post" action="./inc/validate.php">
        	<p><input class="formControl" name="username" type="text" placeholder="Username" required /></p>
        	<p><input class="formControl" name="password" type="password" placeholder="Password" required /></p>
          <input class="btn btn-light" type="submit" value="Login" />
        </form>
      </div>
      
      <div class="col-sm-12 col-md-6 col-lg-6">
        <h3>Sign up below</h3>
        <form method="post" action="save-admin.php">
        	<p><input class="formControl" name="firstName" type="text" placeholder="First Name" required/></p>
        	<p><input class="formControl" name="lastName" type="text" placeholder="Last Name" required /></p>
        	<p><input class="formControl" name="username" type="text" placeholder="Username" required /></p>
        	<p><input class="formControl" name="password" type="password" placeholder="Password" required /></p>
        	<p><input class="formControl" name="confirm" type="password" placeholder="Confirm Password" required /></p>
          <input class="btn btn-light" type="submit" name="submit" value="Register" />
        </form>
      </div>
    </section>
  </main>
<!-- footer file-->
<?php require ('./inc/footer.php'); ?>
