<?php

	session_start();
	$arr=explode(";",file_get_contents("pass.txt"));


		if($_POST['name']==$arr[0]&&$_POST['password']==$arr[1]){

			$_SESSION['name']=$arr[0];
			header("Location: logout.php");
		}
		else{
			echo "incorrect input";
		}
	

?>