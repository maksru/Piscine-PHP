<?php
    if (isset($_POST['add'])) {
        if ($_POST['add'] == "ADD") {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $typeof = $_POST['typeof'];
            $description = $_POST['description'];
            $price = (int)$_POST['price'];
            $img = $_POST['img'];

            $link = mysqli_connect("localhost", "root", "maks1234", "rush00");

            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            $queryInsert = mysqli_query($link, "INSERT INTO `items` (`name`, `type`, typeof, description, price, img) VALUES ('$name', '$type', '$typeof', '$description', '$price', '$img')");

        }
    }
?>
<form method="post" action="">
    <input type="text" name="name" value="" placeholder="name" /><br>
    <input type="text" name="type" value="" placeholder="type" /><br>
    <input type="text" name="typeof" value="" placeholder="typeof" /><br>
    <input type="text" name="description" value="" placeholder="description" /><br>
    <input type="text" name="price" value="" placeholder="price" /><br>
    <input type="text" name="img" value="" placeholder="img" /><br>
    <input type="submit" name="add" value="ADD" />
</form>