<?php
    session_start();
    $order = 0;
    if (!isset($_GET['page']) || $_GET['page'] == "home") {
        $page = "application/views/home.html";
    }
    if ($_GET['page'] == "contact") {
        $page = "application/views/contact.html";
    }
    if ($_GET['page'] == "login") {
        $page = "application/authorization/login.php";
    }
    if ($_GET['page'] == "create") {
        $page = "application/authorization/create.php";
    }
    if ($_GET['page'] == "modif") {
        $page = "application/authorization/modif.php";
    }
    if ($_GET['page'] == "logout") {
        $page = "application/authorization/logout.php";
    }
    if ($_GET['admin'] == "admin") {
        header("location: application/admin/admin.php");
    }
    if ($_GET['page'] == "all" || $_GET['page'] == "iphone" || $_GET['page'] == "ipad" || $_GET['page'] == "imac" || $_GET['page'] == "4s" || $_GET['page'] == "5s" || $_GET['page'] == "6s") {
        $page = "application/items/items.php";
    }
    if ($_GET['page'] == "basket") {
        $page = "application/items/basket.php";
    }
    if (!$_SESSION['loggued_on_user']) {
        $login = $_SERVER['REMOTE_ADDR'];
        if (strstr($login, "::")) {
            $login = trim(str_ireplace("::", " ", $login));
        }
    } else {
        $login = $_SESSION['loggued_on_user'];
    }

    $link = mysqli_connect("localhost", "root", "maks1234", "rush00");

    if (mysqli_connect_errno()) {
        try {
            include("install.php");
        } catch (mysqli_sql_exception $ex) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

    }

    if ($resLogQueryBask = mysqli_query($link, "SELECT * FROM `order` WHERE login='$login' AND ordered='0'")) {
        foreach ($resLogQueryBask as $elem) {
           $order++;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="author" content="mrudyk ahryhory" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://signin.intra.42.fr/assets/42_logo_black-684989d43d629b3c0ff6fd7e1157ee04db9bb7a73fba8ec4e01543d650a1c607.png' rel='icon' type='image/svg' />
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/items.css">
    <title>MOBI</title>
</head>
<body>
    <header>
        <nav>
            <ul class="topmenu">
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=basket">Basket<?php if ($order) {echo "(".$order.")";}?></a></li>
                <li><a href="index.php?page=all" class="down">Category</a>
                    <ul class="submenu down_down">
                        <li><a href="index.php?page=iphone">iPhone</a>
                            <ul class="botmenu">
                                <li><a href="index.php?page=4s">4s</a></li>
                                <li><a href="index.php?page=5s">5s</a></li>
                                <li><a href="index.php?page=6s">6s</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php?page=ipad">iPad</a></li>
                        <li><a href="index.php?page=imac">iMac</a></li>
                        <li><a href="index.php?page=all">All</a></li>
                    </ul>
                </li>
                <?php
                    if ($_SESSION['loggued_on_user'] == "") {
                        echo "<li><a href=\"index.php?page=login\">Login</a></li>";
                    } else {
                        echo "<li><a href=\"index.php?page=modif\">".$_SESSION['loggued_on_user']."</a></li>";
                        echo "<li><a href=\"index.php?page=logout\">LogOut</a></li>";
                    }
                ?>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <?php include $page; ?>
    </div>
    <footer>
        <hr />
        <p>
            &copy; mrudyk && ahryhory 2018  
        </p>
    </footer>
</body>
</html>
