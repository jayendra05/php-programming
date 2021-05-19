<?php

	$data=array("name"=>"punutiya",
	"qual"=>"jr kg fail",
	"hobbies"=>"smoking");
	
	echo"<pre>";
		print_r($data);
	echo"</pre>";
	
	foreach($data as $i=>$j)
	{
		echo"key ".$i." "."and value is ".$j."<br/>";
	}

?>