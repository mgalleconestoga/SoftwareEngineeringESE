<?php
  $submitted = !empty($_POST);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form handler page for login</title>
  </head>
  <body>
    <p>Form submitted (1 for true): <?php echo (int) $submitted ?></p>
    <p>
      Login information sent to server
    </p>
    <ul>
      <li>
        First name: <?php echo $_POST['username']; ?>
      </li>
      <li>
        Password: <?php echo $_POST['password']; ?>
      </li>
    </ul>
  </body>
</html>
