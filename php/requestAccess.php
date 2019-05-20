<?php
  $submitted = !empty($_POST);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form handler page for Request Access</title>
  </head>
  <body>
    <p>Form submitted (1 for true): <?php echo (int) $submitted ?></p>
    <p>
      Information sent to server
    </p>
    <ul>
      <li>First name: <?php echo $_POST['firstname']; ?></li>
      <li>Last name: <?php echo $_POST['lastname']; ?></li>
      <li>Email address: <?php echo $_POST['email']; ?></li>
      <li>Website: <?php echo $_POST['url']; ?></li>
      <li>Birthdate: <?php echo $_POST['birthday']; ?></li>
      <li>Faculty or Student: <?php echo $_POST['fac_or_student']; ?></li>
      <li>
        Other info:
        <ul>
          <?php
            foreach ($_POST['involvement'] as $involve){
              echo '<li>';
              echo $involve;
              echo '</li>';
            }
          ?>
        </ul>

      </li>
      <li>Drive?: <?php echo $_POST['drive_car']; ?></li>
    </ul>
  </body>
</html>
