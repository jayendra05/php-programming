<?php

	$a="nitin";
	$b=strrev($a);
	
	echo("b:".$b."<br/>");
	
	if($a==$b)
	{
		echo ("string ".$b." is palindrome");
	}
	else
	{
		echo("string".$b." is no palindrome");
	}
?>