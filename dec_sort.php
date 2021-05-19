<?php

	$num=array(4,3,5,2,1,9);
	$temp;
	$len=count($num);
	
	
	for($i=0;$i<$len;$i++)
	{
		for($j=$i+1;$j<$len;$j++)
		{
			if($num[$i]<$num[$j])
			{
				$temp=$num[$i];
				$num[$i]=$num[$j];
				$num[$j]=$temp;
			}
		}
	}
	echo ("<pre>");
		print_r($num);
	echo("</pre>");

?>