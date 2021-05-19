<?php

	$my_file=fopen("hello.txt","r") or die ("file not found!");
	echo fread($my_file,filesize("hello.txt"));
	fclose($my_file);
	


?>