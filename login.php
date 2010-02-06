<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Mental Health Tracker</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen,projection" />

</head>

<body>

    <div id="header">

        <h1 class="right">Disturbed</h1>
        <h1><a href="index.php">Disturbed</a></h1>

    </div>

    <!-- NAVIGATION BEGIN -->
    <ul id="nav">

        <li><a href="index.php">Home</a></li>

        <li><a href="questionairre.php">Questionairre</a></li>

        <li><a href="reports.php">Reports</a></li>

        <li><a href="logout.php">Logout</a></li>

    </ul>
    <!-- NAVIGATION END -->

    <div class="clear" />

    </div>

<?php
session_start();

require_once("db.inc.php");

?>

    <form method='POST' action='<?php $PHP_SELF ?>'>
        <br />
        <b>Please Login:</b><br />
            Username: <br />
                <input type="text" name="username" tabindex="1" /><br />
            Password: <br />
                <input type="password" name="password" tabindex="2" /><br />

            <br />
       <input type="Submit" name="login" value="Submit" tabindex="3" /><br />
    </form>


<?php

if ($_POST['login']) {


    if ($_POST['username'] AND $_POST['password']) {
    
    $validation = mysql_query("SELECT * FROM accounts WHERE username='{$_POST['username']}' AND password='".md5($_POST['password'])."'")
        or die(mysql_error());
    
    $rowcount = mysql_num_rows($validation);
     
        if ($rowcount == 1) {
            $_SESSION['username'] = md5($_POST['username'].$_POST['password']);
            header("Location: index.php");
        } else {
            header("Location: login.php");
        }
    
    }
}

require_once("footer.inc.php");
?>
