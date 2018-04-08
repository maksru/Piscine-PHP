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

    $resQuery = mysqli_query($link, "SELECT * FROM `users`");

    if (($row = mysqli_fetch_array($resQuery))  == NULL) {
        echo "<h2 style='color: #E6855F'>No users</h2>";
    }

    foreach ($resQuery as $elem) {
        echo "<form action='' method='post'>";
        $i = 0;
        foreach ($elem as $value) {
            echo "<input type='text' name='$i' value='$value'>";
            $i++;
        }
        echo "<input type='submit' name='delete' value='Delete'>";
        echo "</form>";
    }

    if (isset($_POST['delete'])) {
        if ($_POST['delete'] == "Delete") {
            $id = $_POST[0];

            $resLogQuery = mysqli_query($link, "SELECT * FROM `users` WHERE id = '$id'");

            if ($resLogQuery) {
                $query = mysqli_query($link, "DELETE FROM `users` WHERE id = '$id'");
                refresh();
            }
        }
    }