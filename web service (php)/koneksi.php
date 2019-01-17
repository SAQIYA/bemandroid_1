<?php
	 $server	= "localhost";
	 $user		= "id7562125_saskiakanza";
	 $password	= "123saskia"; 
	 $database	= "id7562125_bemandroid";

	 $con = mysqli_connect($server, $user, $password, $database);
	 if (mysqli_connect_errno()) {
	 	echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	 }

?>
