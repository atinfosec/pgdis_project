<?php
/*
echo "<h2>Welcome user</h2>";
*/

//SECURE CODE
session_start();
echo "<h2>Welcome user</h2>";
session_unset();
session_destroy();
?>