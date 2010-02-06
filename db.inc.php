<?php


// only configurable options
$user = "phpuser";
$pass = "secret";
$database = "disturbed";
// end configurable options

mysql_connect("localhost", "$user", "$pass")
    or die(mysql_error());

mysql_select_db("$database");

?>
