<?php

#Take parameter sent via POST and store it as variable

$cli = $_POST["CALLER_ID_NUMBER"];

#Parse out last 4 digits of variable and store as new variable

$destext = substr($cli, -4);

#Return our new variable as the destination extension

echo "$destext";

?>
