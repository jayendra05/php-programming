<?php
/* 
	for($i=10;$i>=1;$i--)
	{
		echo("<br/>");
		for($j=1;$j<=$i;$j++)
		{
			echo("*");
		}
	} */
	
	$n=7;
	for($i=1;$i<=$n;$i++)
	{
		for($j=$i;$j<$n;$j++)
		{
			echo("&nbsp;&nbsp;");
		}
		
		for($j=1;$j<=(2*$i-1);$j++)
		{
			echo("*");
		}
	echo("<br/>");
		
	}
?>