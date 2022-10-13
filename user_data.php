<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data</title>
</head>
<body>
	<?php
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$birth = $_POST['birthday'];
	$gender  = $_POST['gender'];
	$country = $_POST['country'];
	print_r($email);


	$filename = "userdata.csv";
	$file = fopen($filename, "a");
	fwrite($file, $name);
	fwrite($file, $email );
	fwrite($file, $birth );
	fwrite($file, $gender);
	fwrite($file, $country);
	fclose($file);


	?>

</body>
</html>