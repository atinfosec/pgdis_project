<?php
$IP = $_GET['ip'];
$cmd = 'ping -c 4 '.$IP;
// $cmd = escapeshellcmd($cmd);  //uncomment this for security
if($output=system($cmd)){
	echo '<pre>';
	echo $output;
	echo '</pre>';
}
else{
	echo "Command not executed";
}
?>

