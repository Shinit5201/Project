<?php
//start a new session
session_start();

//destroy the session
session_destroy();

//redirect to the default home page once logged out
header("Location: http://192.168.64.2/index.php");
?>
