<?php
session_start();

require_once("db.inc.php");

// This avoids SQL Injection in POST vars 
foreach ($_POST as $key => $value) {
    $_POST[$key] = mysql_real_escape_string($value);
}

// This avoids SQL Injection in GET vars 
foreach ($_GET as $key => $value) {
    $_GET[$key] = mysql_real_escape_string($value);
}

function disturbed_login() {

    if (!empty($_POST['login'])) {
    
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
        
            $validation = mysql_query("SELECT * FROM accounts WHERE username='{$_POST['username']}' AND password='".md5($_POST['password'])."'")
                or die(mysql_error());
            
            $rowcount = mysql_num_rows($validation);
                
                if ($rowcount == 1) {
                    $_SESSION['username'] = $_POST['username'];
                    header("Location: index.php");
                } else {
                    header("Location: login.php");
                }
    
        } else {
            header("Location: login.php");
        }
    
    } else {
        header("Location: login.php");
    }
}

function disturbed_change_password() {
    if (!empty($_POST['update-password'])) {
    
        if (!empty($_POST['current-password'])) {
    
            $validation = mysql_query("SELECT * FROM accounts WHERE username='{$_SESSION['username']}' AND password='".md5($_POST['current-password'])."'")
                or die(mysql_error());
            
            $rowcount = mysql_num_rows($validation);
    
                if ($rowcount == 1) { 
                    if ($_POST['new-password1'] === $_POST['new-password2']) {
                        // update new password
                        mysql_query("UPDATE accounts SET password='".md5($_POST['new-password1'])."' WHERE username='{$_SESSION['username']}'")
                            or die(mysql_error());
                        
                        header("Location: index.php");
                    } else {
                        // passwords don't match
                    }
                }
        } else {
            // current password required
            print "Please provide your current password.";
            print "<br />";
        }
    }
}

if (!empty($_POST['login'])) {
    disturbed_login();
}

if (!empty($_POST['update-password'])) {
    disturbed_change_password();
}

?>
