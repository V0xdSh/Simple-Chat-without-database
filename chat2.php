<?php
error_reporting(0);
file_put_contents("messages.txt", " Username: ". $_POST["username"]. " Message: ". $_POST["message"]. "\n", FILE_APPEND);
header('Location: chat.html'); //your site
?>