<?php

if ($_SESSION['username'] !== "admin") {
    header("Location: index.php");
}

require_once("header.inc.php");
?>

<center>
    <form method="post" action="handler.php">
        <br />
        <b>Password Update:</b><br />
            Current Password: <br />
                <input type="password" name="current-password" size="20" tabindex="1" /><br />
            New Password: <br />
                <input type="password" name="new-password1" size="20" tabindex="2" /><br />
            New Password: <br />
                <input type="password" name="new-password2" size="20" tabindex="3" /><br />
            <br />
       <input type="submit" name="update-password" value="submit" tabindex="4" /><br />
    </form>
</center>


<?php
require_once("footer.inc.php");
?>
