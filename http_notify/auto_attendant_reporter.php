<?php

$logfile = '/var/log/apache2/aacall.log';

$date = new DateTime();
$date = $date->format("y:m:d h:i:s");


$log_message = "{$date} Caller ID is {$_GET['caller']} and DNS is {$_GET['dialed']} and they selected option 1\n";
file_put_contents($logfile, $log_message, FILE_APPEND);

$db = new SQLite3('callreport.db');

$db->exec("INSERT INTO main_aa (callid, date, option_pressed) VALUES ('{$_GET['ci']}', CURRENT_TIMESTAMP, '{$_GET['opt']}')");


?>
