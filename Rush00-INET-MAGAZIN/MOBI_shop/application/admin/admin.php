<?php
    session_start();
    $_SESSION['admin'] = false;

    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == "OK") {
            if ($_POST['login'] == "admin" && $_POST['password'] == "unit42") {
                $_SESSION['admin'] = true;
                header("location: work.php");
            }
        }
    }
    if ($_SESSION['admin'] == false) {
        echo "<form method=\"post\" action=\"\"><input type=\"text\" name=\"login\" value=\"\" /><br><input type=\"password\" name=\"password\" value=\"\" /><br><input type=\"submit\" name=\"submit\" value=\"OK\" /></form>";
    }
?>

