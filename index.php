<?php
	class User {
		public $username;
		public $email;

		public function __construct($username, $email) {
			$this->username = $username;
			$this->email = $email;
		}

		public function addFriend() {
			return "$this->email added a new friend";
		}
	}

	$userOne = new User('mario', 'mario@jexan.com');
	$userTwo = new User('luigi', 'luigi@jexan.com');

	echo $userOne->username . '<br>';
	echo $userOne->email . '<br>';
	echo $userOne->addFriend() . '<br>';

	echo $userTwo->username . '<br>';
	echo $userTwo->email . '<br>';
	echo $userTwo->addFriend() . '<br>';

	// print_r( get_class_vars('User') );
	// print_r( get_class_methods('User') );

?>

<html lang="en">
<head>
	<title>PHP OOP Tutorial</title>
</head>
</html>
