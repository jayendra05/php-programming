<?php

	$a=1;
	$b=1;
	$c=1;
	
	if($a>$b and $a>$c)
	{
		echo("a is greater");
	}
	
	elseif($b>$a and $b>$c)
	{
		echo("b is greater");
	}
	
	elseif($c>$a and $c>$b)
	{
		echo("c is greater");
	}
	
	elseif($a==$b and $a==$c)
	{
		echo("all are equal");
	}
	
	else{
		echo("invalid number");
	}

?>