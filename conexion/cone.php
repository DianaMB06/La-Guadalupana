
<?php

//$mysqli = new MySQLi("b6uouuky18ayzflhdp9y-mysql.services.clever-cloud.com", "urqz8qagcmfacnnt","DbfpbsTBqXoaOKacOMBI", "b6uouuky18ayzflhdp9y");

		$mysqli = new MySQLi("bduqeoys4q5dzfxhriuz-mysql.services.clever-cloud.com", "uhj2iahcjnhkzxt0","GSGaOWLHndXdtDF1M9Gc", "bduqeoys4q5dzfxhriuz");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else

?>