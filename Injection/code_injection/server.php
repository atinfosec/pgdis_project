<?php
$page = $_GET['page'];
include($page);		// Comment this for security

// Uncomment lines give below for security
// if($page == 'login.php'){
// 	include($page);
// }
// else{
// 	echo "Page cannot be requested";
// }

?>
