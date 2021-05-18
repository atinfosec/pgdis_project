<?php
$redirected_url = $_GET['url'];
header('Location:'.$redirected_url);

//SECURE CODE
// if (filter_var($redirected_url, FILTER_VALIDATE_URL)){
// 	$parsed = parse_url($redirected_url);
// 	if ($parsed['host'] == '192.168.0.175'){
// 		header('Location:'.$redirected_url);
// 	}
// 	else{
// 		echo 'You are not allowed to redirect to another host';
// 	}
// }
// else{
// 	echo "Something went wrong";
// }
?>