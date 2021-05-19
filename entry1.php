<?php
	if(isset($_POST['submit']))
	{
		$firstname=$_POST["firstname"];
		
		$lastname=$_POST["lastname"];

		if(isset($_POST['gender']))
		{
			$gender=$_POST["gender"];
		}
	echo("your firstname is : ".$firstname."<br/>");
	echo("your lastname is : ".$lastname."<br/>");
	echo("your gender is : ".$gender."<br/>");
	}
	else
	{
		echo("something is missing.");
	}
	
	
		
	
?>