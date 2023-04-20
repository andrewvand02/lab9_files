<?php
$size= $_POST["size"];
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= $size; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= $size; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
