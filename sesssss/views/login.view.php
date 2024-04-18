<?php require "views/components/header.php" ?>

<form method="POST">
  <h1>Login</h1>

  
  <label>
    email:
    <input name="email" value="<?= $_POST["email"] ?? "" ?>" />
  </label>
  <?php if (isset($errors["email"])) { ?>
  <p><?= $errors["email"] ?> </p>
  <?php } ?>

  <label>
    Passoword 
    <input name="password" />
  </label>
  <?php if (isset($errors["password"])) { ?>
  <p><?= $errors["password"] ?> </p>
  <?php } ?>
  <button>Login</button>
</form>

<?php require "views/components/footer.php" ?>