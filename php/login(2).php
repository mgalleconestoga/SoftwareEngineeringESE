<?php 
$submitted = !empty($_POST); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Form submited? <?php echo (int) $submitted; ?></p>
    <p>Login info</p>
    <ul>
        <li>Username: <?php echo $_POST['username'] ?></li>
        <li>Password: <?php echo $_POST['password'] ?></li>
    </ul>
</body>
</html>