<?php
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] == "Sign In") {
            $link = mysqli_connect("localhost", "root", "maks1234", "rush00");

            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            $login = $_POST['login'];
            $passwd = hash("whirlpool", $_POST['passwd']);
            $resLogQuery = mysqli_query($link, "SELECT * FROM `users` WHERE login = '$login'");

            $row = mysqli_fetch_array($resLogQuery);

            if ($row) {
                if ($row['password'] == $passwd) {
                    $_SESSION['loggued_on_user'] = $login;
                    header("location: index.php");
                } else {
                    echo "<h3 style='color: red'>Wrong password</h3>";
                }
            } else {
                echo "<h3 style='color: red'>Wrong login</h3>";
            }
        }
    }
?>
<div class="form">
    <form method="POST" action="">
        <fieldset>
            <legend>Login</legend>
            <input type="text" name="login" placeholder="Login" value="" />
            <input type="password" name="passwd" placeholder="Password" value="" />
        </fieldset>
        <input type="submit" name="submit" value="Sign In" />
    </form>
    <a href="index.php?page=create">Create account</a>
    <a href="index.php?page=modif">Modif account</a>
 </div>
