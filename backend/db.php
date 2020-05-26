<?php
		$conn=mysqli_connect("localhost","root","","database_pcb");

		if(!mysqli_select_db($conn, "database_pcb"))
			die("CAN'T SELECT DATABASE");


?>