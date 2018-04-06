<!DOCTYPE html>
<html>
<head>
	<title>
	
	</title>
</head>
<body>



	<form name="form" action="" method="post">
	<p>Enter string :</p>
	<textarea name="white"></textarea>
	<input type="submit" name="submit">
	</form> 	

<?php

		$name="";

		if (isset($_REQUEST["white"])){
		$name=$_POST["white"];

?>


	<p>Sample string </p>
	<pre><?= $name?>
	</pre>
	<br/>


<?php
		echo "Expected output : ";
		
		echo preg_replace("/.*\[|\].*/", "", $name);
	}
		
?>

</body>
</html>