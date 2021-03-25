<?php 

echo "<table border='1'>";

	echo "<tr>";	
	for ($i=1; $i <=10 ; $i++) { 
			echo "<th>tabla del $i</th>";
		}
			
			for ($j=1; $j <=10 ; $j++) { 
				echo "<tr>";
				for ($i=1; $i <=10 ; $i++) { 
					echo "<td> $i X $j =".$i*$j."</td>";
				
				}
			}
			echo "</tr>";



echo"</table>";


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>