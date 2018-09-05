<?php

// the admin bot setup

include('./httpful.phar');
include('./functions.php');

// this is found at https://frozen-thicket-87381.herokuapp.com/adminBot.php
$bot_token = "admin bot token";

// adds admin commands 
$isAdmin = TRUE;
include('adminFunctions.php');

include('./index.php');

?>
