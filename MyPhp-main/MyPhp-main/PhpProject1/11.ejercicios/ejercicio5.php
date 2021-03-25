


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action=""metodh="GET">
		<label for="variable1">variable1</label>
		<input type="text" name="variable1">
		<label for="variable2"><br>variable2</label>
		<input type="text" name="variable2">
		<input type="submit" value="enviar">
	</form>
</body>
</html>


<?php 

if (isset($_GET['variable1']) &&isset($_GET['variable2'])) {
	$var1=$_GET['variable1'];
	$var2=$_GET['variable2'];
	if ($var1>$var2) {
		$var3=$var1;
		$var1=$var2;
		$var2=$var3;
		
	}
	for ($i=$var1; $i <= $var2; $i++) { 
		echo $i;
	}


}else {
	echo "escribe todo, marrano";
}




 ?>