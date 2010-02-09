<?php
session_start();
?>

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

    <form method="post" action="handler.php">
        <br />
        <b>Registration:</b><br /><br />
            Username: <br />
                <input type="text" name="username" size="20" tabindex="1" /><br /><br />
            Password: <br />
                <input type="password" name="password2" size="20" tabindex="2" /><br /><br />
            Password (verify): <br />
                <input type="password" name="password1" size="20" tabindex="2" /><br /><br />
            First Name: <br />
                <input type="text" name="firstname" size="20" tabindex="3" /><br /><br />
            Last Name: <br />
                <input type="text" name="lastname" size="20" tabindex="4" /><br /><br />
            Email: <br />
                <input type="text" name="email" size="20" tabindex="5" /><br /><br />
            
            <br />
       <input type="submit" name="registration" value="submit" tabindex="9" /><br />
    </form>

<?php
require_once("footer.inc.php");
?>
