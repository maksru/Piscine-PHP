<?php
    session_start();
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

    if (!$_SESSION['loggued_on_user']) {
        $login = $_SERVER['REMOTE_ADDR'];
        if (strstr($login, "::")) {
            $login = trim(str_ireplace("::", " ", $login));
        }
    } else {
        $login = $_SESSION['loggued_on_user'];
    }

    if ($_SESSION['loggued_on_user'] == $login) {
        $addr = $_SERVER['REMOTE_ADDR'];
        if (strstr($addr, "::")) {
            $addr = trim(str_ireplace("::", " ", $addr));
        }

        $query = mysqli_query($link, "SELECT * FROM `order` WHERE addr='$addr' AND ordered='0'");

       if ($row = mysqli_fetch_array($query)) {
            $query = mysqli_query($link, "UPDATE `order` SET login = '$login' WHERE addr='$addr' AND ordered='0'");
        }
    }

    $resLogQuery = mysqli_query($link, "SELECT * FROM `order` WHERE login='$login' AND `ordered`='0'");

    echo "<div class='center'>";
    echo "<div class='table'>";
    echo "<table><br>";
    $i = 0;
    $total = 0;
    foreach ($resLogQuery as $elem) {
        echo "<tr>";
        echo "<td style='color: #003559; height: 70px; font-weight: bold'>" . $elem['name'] . "</td>";
        echo "<td style='color: #9ACD32; height: 70px;'>" . $elem['price'] . " $</td>";
        echo "<td><form method='post'><input type='hidden' name='hidden' value='$i'><input style='padding: 10px; margin-top: 10px;' type='submit' name='submit' value='Delete'></form></td>";
        echo "</tr>";
        $total = $total + (int)$elem['price'];
        $i++;
    }
    echo "<tr><td style='color: #003559; height: 70px; font-weight: bold'>Total: </td><td style='color: #9ACD32; height: 70px;'>$total $</td><td><form method='post'><input style='padding: 10px; margin-top: 10px;' type='submit' name='order' value='Order'></form></td></tr>";
    echo "</table>";
    echo "</div>";
    echo "</div>";

    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == "Delete") {
            $i = (int)$_POST['hidden'];
            $find = 0;

            foreach ($resLogQuery as $elem) {
                if ($find == $i) {
                    $id = $elem['id'];
                    mysqli_query($link, "DELETE FROM `order` WHERE id = '$id'");
                    refresh();
                }
                $find++;
            }
        }
    }

    if (isset($_POST['order'])) {
        if ($_POST['order'] == 'Order') {
            if (!$_SESSION['loggued_on_user']) {
                header("location: index.php?page=login");
            } else {
                mysqli_query($link, "UPDATE `order` SET ordered = '1' WHERE login='$login' AND ordered='0'");
                echo "<div><h2 style='color: green'>Your order has been sent</h2></div>";
            }
        }
    }