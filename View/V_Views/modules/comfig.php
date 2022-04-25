	<?php
    {
	$con= mysqli_connect("localhost","groupfour","nhom4","nhom4");
	if(!$con)
	{
		die("Khong ket noi duoc den CSDL");
		exit();
	}
	else
	{
		mysqli_set_charset($con,"utf8");
		return $con;
	}
	}
	?>S