<?php
$logfile = 'log.csv';
$now = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
file_put_contents($logfile, "$now;$ip;$ua\n", FILE_APPEND);
?>