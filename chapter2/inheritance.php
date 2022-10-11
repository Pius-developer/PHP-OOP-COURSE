<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inheritance</title>
</head>
<body>


	<?php

       require 'account.php';

       $account = new account();

       $account->deposit(100, "Emeka");

       $account ->withdraw(3000, "Ejike");


	?>

</body>
</html>