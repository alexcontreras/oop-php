<?php
	class User {
		public $username = 'alexcontreras';
		public $email = 'ac@jexan.com';

		public function addFriend() {
			return "$this->email added a new friend";
		}
	}

	$userOne = new User();
	$userTwo = new User();

	echo $userOne->username . '<br>';
	echo $userOne->email . '<br>';
	echo $userOne->addFriend() . '<br>';

	$userTwo->username = 'ricardo';
	$userTwo->email = 'rvigilc@gmail.com';

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
