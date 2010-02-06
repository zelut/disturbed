<?php

// only configurable options
$username = "phpuser";
$password = "secret";
$database = "disturbed";
// end configurable options

mysql_connect("localhost", "$username", "$password")
    or die(mysql_error());

mysql_select_db("$database");

?>
