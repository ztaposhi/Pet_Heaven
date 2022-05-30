<?php
	require 'db.php';
	


		$check=$_SESSION['login'];
			
		if(!empty($check)){
			$sql = "SELECT password FROM `admin` WHERE email LIKE \"$check\"";
			$sql1=$con->query($sql);
			$row=$sql1->fetch_assoc();
			if(isset($f_l)){
				$con->close();
			}
		}else{
				header("location: index.php");
				$con->close();
			}
?>