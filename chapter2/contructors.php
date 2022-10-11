<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

        include'comments.php';


        $comment = new comments('I want Fruit for Dinner');

        echo $comment->text;

	?>

</body>
</html>