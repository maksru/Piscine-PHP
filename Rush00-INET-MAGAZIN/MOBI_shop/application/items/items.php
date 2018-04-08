<?php
    function refresh($url = NULL) {
        if(empty($url)) {
            $url = $_SERVER['REQUEST_URI'];
        }
        header("Location: ".$url);
        exit();
    }

    $link = mysqli_connect("localhost", "root", "maks1234", "rush00");

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    if ($_GET['page'] == "all") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items`");
    }
    if ($_GET['page'] == "iphone") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE `type` = 'iPhone'");
    }
    if ($_GET['page'] == "ipad") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE `type`='iPad'");
    }
    if ($_GET['page'] == "imac") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE `type`='iMac'");
    }
    if ($_GET['page'] == "4s") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE typeof='4s'");
    }
    if ($_GET['page'] == "5s") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE typeof='5s'");
    }
    if ($_GET['page'] == "6s") {
        $resQuery = mysqli_query($link, "SELECT * FROM `items` WHERE typeof='6s'");
    }
    echo "<div class='center'>";
    echo "<div class='table'>";
    echo "<table>";
    $i = 0;
    foreach ($resQuery as $elem) {
            echo "<tr>";
            echo "<td class='name'>".$elem['name']."</td>";
            echo "<td class='t_img'><img src='".$elem['img']."' alt='apple'></td>";
            echo "<td class='desc'>".$elem['description']."</td>";
            echo "<td class='price'>".$elem['price']." $</td>";
            echo "<td><form method='post'><input type='hidden' name='hidden' value='$i'><input type='submit' name='submit' value='Buy'></form></td>";
            echo "</tr>";
            $i++;
    }
    echo "</table>";
    echo "</div>";
    echo "</div>";

    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == "Buy") {
            $i = (int)$_POST['hidden'];
            $find = 0;

            if (!$_SESSION['loggued_on_user']) {
                $login = $_SERVER['REMOTE_ADDR'];
                if (strstr($login, "::")) {
                    $login = trim(str_ireplace("::", " ", $login));
                }
            } else {
                $login = $_SESSION['loggued_on_user'];
            }

            $addr = $_SERVER['REMOTE_ADDR'];
            if (strstr($addr, "::")) {
                $addr = str_ireplace("::", " ", $login);
                $addr = trim($addr);
            }
            $ordered = 0;

            foreach ($resQuery as $elem) {
                if ($find == $i) {
                    $name = $elem['name'];
                    $price = $elem['price'];
                    $query = mysqli_query($link, "INSERT INTO `order` (login, `name`, price, ordered, addr) VALUES ('$login', '$name', '$price', '$ordered', '$addr')");
                    break ;
                }
                $find++;
            }
            refresh();
        }
    }
