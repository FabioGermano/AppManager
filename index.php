<?php
	echo "<div><h1> Testing OpsWorks "; 
		echo getcwd();
	echo "</h1></div>";
	echo "<div>";
	$dir    = '../';
	$files1 = scandir($dir);

	foreach($files1 as $element)
	{
		 echo "<a href='".$elemnt."'> ".$elemnt."</a><br>";
	}
	echo "</div>";
?>
