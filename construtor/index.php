
<?php

  class User
  {
  	private $username;
  	private $email ;
  	public function __construct($username, $email,$stack)
  	{
  		$this->user = $username;
  		$this->email = $email;
  		$this->stack = $stack;
  	}

  	// getter

  	public function getEmail()
  	{
  		return $this->email;

  	}

  	// Setter
  	public function setEmail($email){
  		if (strpos($email,'@')> -1) {
  			return $this->email = $email;
  		}
  	}
  }

   // Parsing Values

   $Userone = new User("Pius", "Pius@gmail.com","PHP");
   $UserTwo = new User("Kante", "kante@gmail.com","JAVA");

   $Userone -> setEmail('herewego@hmail.com');

 


   // Inheritance

   class adminUser extends User{

   	public $level;

   	public function __construct($username,$email,$stack,$level){
   		$this->level = $level;

   		parent:: __construct($username,$email,$stack);
   	}

   }

   $UserThree = new adminUser("Bobi", "bobi@gmail.com","JAVAScript",5);

   echo $UserThree -> getEmail().'<br>';

   echo $UserThree->level;


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>