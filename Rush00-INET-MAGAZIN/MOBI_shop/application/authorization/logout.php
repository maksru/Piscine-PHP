<?php
    $_SESSION['loggued_on_user'] = "";
    session_destroy();
    header("location: index.php");
    