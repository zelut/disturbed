<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
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

        <?php if ($_SESSION['username'] === "admin") { ?>
                <li><a href="admin.php">Admin</a></li>
        <?php } ?>

        <li><a href="logout.php">Logout</a></li>
    </ul>
    <!-- NAVIGATION END -->

    <div class="clear" />

    <!-- BEGIN SIDEBAR -->
    <!-- <div id="sidebar"> -->

    <!--     <h2>Latest News or Comments</h2> -->

    <!--         <p class="news"> -->
    <!--         An example of a "latest news" type text area. Here would be the excerpt of the article. You can of course put anything you like here. -->
    <!--             <a href="#" class="more">Read More »</a> -->
    <!--         </p> -->
    <!--     <h2>Sub Navigation</h2> -->
    <!--         <ul> -->
    <!--             <li><a href="#intro">Introduction</a></li> -->
    <!--             <li><a href="#about">About</a></li> -->
    <!--             <li><a href="#examples">Examples</a></li> -->
    <!--             <li><a href="#contact">Contact</a></li> -->
    <!--         </ul> -->
    <!--     <h2>Search</h2> -->
    <!--         <input name="" type="text" value="Search..." /> -->
    </div>
    <!-- END SIDEBAR -->

