// on ping write to log.txt 
<?php
$file = fopen("log.txt", "a");
fwrite($file, $_SERVER['REMOTE_ADDR'] . " " . $_SERVER['HTTP_USER_AGENT'] .$_GET["url"]. "\n");
fclose($file);
?>
