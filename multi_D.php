<?php
	
	$name=array(
	
		array("punitiya",69,6969),
		array("puni",96,6969),
		array("punitke",56,8989)
	);
	
	/*echo("<pre>");
		print_r($name);
	echo("</pre>"); */
	
	for($i=0;$i<=2;$i++)
	{
		//echo("Row number is : ".$i."<br/>");
		
		echo "<table>";
		echo "<tr>";
		for($j=0;$j<=2;$j++)
		{
			
			echo("<td>".$name[$i][$j]."</td>");
			
		}
		echo "</tr>";
		echo "</table>";
	}

?>