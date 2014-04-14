<?php
	echo "<div><h1> Testing OpsWorks "; 
		echo getcwd();
	echo "</h1></div>";
	echo "<div>";
	$dir    = $_GET['dir'];
	$files1 = scandir($dir);

	foreach($files1 as $element)
	{
		 echo "<a href='index.php?dir=".$element."'> ".$element."</a><br>";
	}
	echo "</div>";
?>
