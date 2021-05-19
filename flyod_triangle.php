<?php
	
	
	$num=1;
	$n=4;
	for($x=1;$x<=$n;$x++)
	{
		echo("<br/>");
		for($y=1;$y<=$x;$y++)
		{	
			echo("&nbsp;".$num);
			$num++;
		}
	}

?>