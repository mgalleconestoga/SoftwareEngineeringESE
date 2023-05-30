<?php
$submitted = !empty($_POST);
?>
<!DOCTYPE html>
<html>
	<head><title>Form Handler Page</title></head>
	<body>
		<p>Form submitted? <?php echo (int) $submitted; ?> </p>
		<p>Your Submitted info is</p>
		<ul>
			<li><b>First Name</b>: <?php echo $_POST['firstname']; ?></li>
			<li><b>Last name</b>: <?php echo $_POST['lastname']; ?></li>
		</ul>
	</body>
</html>

