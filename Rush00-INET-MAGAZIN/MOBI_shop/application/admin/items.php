<?php
    function refresh($url = NULL) {
        if (empty($url)) {
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

    $resQuery = mysqli_query($link, "SELECT * FROM `items`");

    if (($row = mysqli_fetch_array($resQuery))  == NULL) {
        echo "<h2 style='color: #E6855F'>No items</h2>";
    }

    foreach ($resQuery as $elem) {
        echo "<form action='' method='post'>";
        $i = 0;
        foreach ($elem as $value) {
            if ($value == $elem['img']) {
                echo "<img src='$value' alt='apple' width='100' height='100'>";
            } else {
                echo "<input type='text' name='$i' value='$value'>";
            }
            $id = $elem['id'];
            $i++;
        }
        echo "<input type='hidden' name='value_id' value='{$id}'>";
        echo "<input type='submit' name='delete' value='Delete'>";
        echo "<input type='submit' name='modify_item' value='Edit'>";
        echo "<hr style='height: 5px'>";
        echo "</form>";
    }

    if (isset($_POST['delete'])) {
        if ($_POST['delete'] == "Delete") {
            $id = $_POST['value_id'];

            $query = mysqli_query($link, "DELETE FROM `items` WHERE id = '$id'");
            refresh();
        }
    }

    if (isset($_POST['modify_item'])) {
        if ($_POST['modify_item'] == "Edit") {
            $id = $_POST['value_id'];
            $name = $_POST['1'];
            $type = $_POST['2'];
            $typeof = $_POST['3'];
            $description = $_POST['4'];
            $price = $_POST['5'];

            $query = mysqli_query($link, "UPDATE `items` SET `name` = '$name', `type` = '$type', `typeof` = '$typeof', `description` = '$description', `price` = '$price' WHERE id = '$id'");
            refresh();
        }
    }

