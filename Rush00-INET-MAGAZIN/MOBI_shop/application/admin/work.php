<?php
    session_start();
    if (!isset($_GET['page'])) {
        $page = "info.php";
    }
    if ($_GET['page'] == "users") {
        $page = "users.php";
    }
    if ($_GET['page'] == "items") {
        $page = "items.php";
    }
    if ($_GET['page'] == "orders") {
        $page = "orders.php";
    }
    if ($_GET['page'] == "add") {
        $page = "add.php";
    }
    if ($_GET['page'] == "logout") {
        $page = "logout_admin.php";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="author" content="ykondrat omotyliu"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        href='https://signin.intra.42.fr/assets/42_logo_black-684989d43d629b3c0ff6fd7e1157ee04db9bb7a73fba8ec4e01543d650a1c607.png'
        rel='icon' type='image/svg'/>
    <link rel="stylesheet" href="../../css/app.css">
    <title>UNIT 42</title>
</head>
<body>
<?php if ($_SESSION['admin'] == true) {?>
<header>
    <nav>
        <ul class="topmenu">
            <li><a href="work.php?page=users">Users</a></li>
            <li><a href="work.php?page=items">Items</a></li>
            <li><a href="work.php?page=orders">Orders</a></li>
            <li><a href="work.php?page=add">Add items</a></li>
            <li><a href="work.php?page=logout">Log out</a></li>
        </ul>
    </nav>
</header>
<div class="container">
    <?php include $page; ?>
</div>
<?php } else {?>
<h1>You do not pass :)</h1>
<?php }?>
</body>
</html>
