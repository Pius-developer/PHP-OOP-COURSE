<?php


// Creating a class


class user
{
	// Creating Properties of a class

	public $name;
	public $username;
	public $follower_count;
}

$piusObject = new user();

$piusObject ->name = "Pius Web";

$piusObject ->username ="@ptech";

$piusObject ->follower_count = 60;

print_r($piusObject)


?>