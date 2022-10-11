<?php


class account 
{

	public $accountname;

	public $accountbalance;

	public $accountnumber;

	public function deposit($amount, $userid)
	{
		echo "Depositing" . $amount .  "From" . $userid . "<br>";
	}

	public function withdraw($amount, $sender)
	{
		echo "Withdrawing" . $amount . "By" . $sender;
	}

	public function getbalance()
	{
		return $this->accountbalance;
	}
}



?>