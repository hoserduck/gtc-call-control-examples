<?php

#Route calls from 4 digit extensions to extension 1234

if(preg_match("(^[0-9]{4}$)",$_POST["CALLER_ID_NUMBER"]))
{
	echo "1234";
}

#Route calls from numbers ending in 6100 to extension 2345

if(preg_match("(..*6100$)",$_POST["CALLER_ID_NUMBER"]))
{
        echo "2345";
}


?>
