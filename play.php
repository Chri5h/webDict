<?php
	include 'connection.php';

// get value of row to activate
if(isset($_GET['sound']))
{
	// get details
	$sound = $_GET['sound'];
	echo $sound;
  
}
?>
