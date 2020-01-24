<?php
	$data = $_POST['oops'];
	
	switch ($data) {
		case 'class and object':
			# code...
			require 'class.php';
			break;
		case 'constructer and destructer':
			# code...
			require 'constructor.php';
			break;
		case 'inheritance':
			# code...
			require 'inheritance.php';
			break;
		case 'interface':
			# code...
			require 'interface.php';
			break;
		case 'static and constant variable':
			# code...
			require 'const_static.php';
			break;
		case 'abstract function':
			# code...
			require 'abstract.php';
			break;
		case 'polymorphism':
			# code...
			require 'polymorph.php';
			break;

		default:
			# code...
			echo "wrong input";
			break;
	}
	

?>