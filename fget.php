<?php

	$my_file=fopen("hello.txt","r") or die ("file not found!");
	while(!feof($my_file))
	{
		echo fgets($my_file)."</br>";
	}
	fclose($my_file);
		


?>