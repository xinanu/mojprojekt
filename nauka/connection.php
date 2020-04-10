<?php

$dbhost = 'localhost';
$dbuser = '17_ziobro';
$dbpass = 'N6g7t8g1w9';
$dbname = '17_ziobro';
$conn = mysql_connect($dbhost, $dbuser, $dbpass)
or die('Bład połączenia z serwerem: ' . mysql_error());

mysql_select_db($dbname)
or die('Nie ma bazy o nazwie: '.$dbname);

mysql_set_charset('utf8');
        ?>