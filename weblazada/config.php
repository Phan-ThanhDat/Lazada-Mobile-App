<?php

	define("DBSERVER", "localhost") ;
	define("DBUSERNAME",'root');
	define("DBPASSWORD","");
	define("DBNAME","lazada");

	$conn = mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);
	if (!$conn)
	{
		die('Connect Error : '. mysqli_connect_errno());

	};

 ?>