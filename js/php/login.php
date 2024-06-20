<?php
$submitted = !empty($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form handler </title>
</head>
<body>
    <p>Form submitted? <?php echo (int) $submitted; ?></p> 
    <ul>
        <li><b>Username:</b> <?php echo $_POST['username']; ?></li>
        <li><b>Password:</b> <?php echo $_POST['password']; ?></li>
    </ul>   

</body>
</html>