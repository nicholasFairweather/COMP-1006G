<?php
  require './inc/header.php';
?>
  <section class="loginMasthead">
    <div>
      <h3>Login Page</h3>
    </div>
  </section>
  <main>
    <section class="row loginRow">
      <div class="col alignSelfCenter">
        <h3>You are not logged in</h3>
        <p>Login below</p>
        <form method="post" action="./inc/validate.php">
          <p><input class="formControl" name="username" type="text" placeholder="Username" required /></p>
          <p><input class="formControl" name="password" type="password" placeholder="Password" required /></p>
          <input class="btn btn-primary" type="submit" value="Login" />
        </form>
      </div>
    </section>
  </main>
<?php
  require './inc/footer.php';
?>
