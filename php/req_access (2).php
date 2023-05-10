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
			<li><b>Email</b>: <?php echo $_POST['email']; ?></li>
			<li><b>URL</b>: <?php echo $_POST['url']; ?></li>
			<li><b>Birth date</b>: <?php echo $_POST['birthday']; ?></li>
			<li><b>Faculty / Student</b>: <?php echo $_POST['fac_or_student']; ?></li>
			<li><b>Involvement</b>: <?php echo $_POST['involvement']; ?></li>
			<li><b>Drive car</b>: <?php echo $_POST['drives_car']; ?></li>
			<li><b>File upload</b>: <?php echo $_POST['file_uploaded']; ?></li>
			<li><b>Other comments</b>: <?php echo $_POST['comments']; ?></li>
		</ul>
	</body>
</html>

