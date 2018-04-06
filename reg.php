<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>



	<form name="form" action="" method="post">
	<p>Enter string :</p>
	<input type="text" name="white" />
	</form> 	

<?php

		$name="";

		if (isset($_REQUEST["white"])){
		$name=$_POST["white"];

?>


	<p>Sample string </p>
	<?= $name?>
	<br/>


<?php
		echo "Expected output : ";
		echo preg_replace('/\s+/', '', $name)."\n";	
	}
		
?>

</body>
</html>