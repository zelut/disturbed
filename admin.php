<?php

if ($_SESSION['username'] != 'admin') {
    header("Location: index.php");
}

require_once("header.inc.php");

require_once("footer.inc.php");

?>
