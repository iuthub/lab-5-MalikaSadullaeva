<!DOCTYPE html>
<html>


<?php

		session_start();

		if(!isset($_SESSION['name'])){
		$powname=array("leo","bear","tiger","monkey","cat","rat");
		$_SESSION['name']=$powname[rand(0,5)];

		}	

		if(isset($_SESSION['count'])){
			$_SESSION['count']++; 
		}else{
			$_SESSION['count']=1;
		}
		
?>
<head>
<title></title>
</head>
<body>

<?php
		echo "Animal choosen for user: " . $_SESSION['name'];
		echo "<br />". "Visited: " . $_SESSION['count'] . " times";
?>

<a href="unset.php">start over</a>

<?php
	/*if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(isset($_POST['s'])){
			session_destroy();
		}
		
	}*/
?>


</body>
</html>