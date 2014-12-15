<?php

	if(!@file_get_contents($_POST['clip'].'.html'))
	{
		$my_file = $_POST['clip'].'.html';
		$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file); //implicitly creates file]
	}
	
	$contents = file_get_contents($_POST['clip'].'.html');
	echo $contents;

?>