<?php

//Simple end session code taken from stackoverflow
//Link: http://stackoverflow.com/questions/4608182/logout-and-redirecting-session-in-php
session_start();
unset($_SESSION['username']); // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
session_destroy();
header("Location: index.php");
?>
