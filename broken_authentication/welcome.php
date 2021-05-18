<?php
session_start();
echo 'Welcome '.$_SESSION['user'].' to your personal page';
session_unset();
session_destroy();
?>