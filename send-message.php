<?php
$sender=$_POST["sender"];
$message=$_POST["message"];
$file=fopen("message.txt","a");
fwrite($file,"Name:$sender \nmessage:$message");
fclose($file);