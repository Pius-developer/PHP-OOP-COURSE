<?php


class comments
{

	public $text;

	public $userid;

	public function __construct($text, $userid)

	{
		$this->text = $text;

		$this->userid = $userid;
	}
}



?>