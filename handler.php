<?php

require_once("db.inc.php");

// login logic
if (isset($_POST['login'])) {

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

// main form submission logic
if (isset($_POST['questionairre'])) {

}

// report generation logic
if (isset($_POST['reports'])) {

}

?>
