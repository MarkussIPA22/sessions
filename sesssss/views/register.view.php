<?php require "views/components/header.php" ?>

<form method="POST">
  <h1>Register</h1>

  
  <label>
    email:
    <input name="email" value="<?= $_POST["email"] ?? "" ?>" />
  </label>
  <?php if (isset($errors["email"])) { ?>
  <p><?= $errors["email"] ?> </p>
  <?php } ?>

  <label>
    Passoword (attleast 1 upper case letter , 1 lowercase , 1 special char):
    <input name="password" />
  </label>
  <?php if (isset($errors["password"])) { ?>
  <p><?= $errors["password"] ?> </p>
  <?php } ?>
  <button>Register</button>
</form>

<?php require "views/components/footer.php" ?>