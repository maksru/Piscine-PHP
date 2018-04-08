<?php
    if (isset($_POST['submit'])) {
        if ($_POST['submit'] === "Sign In") {
            $link = mysqli_connect("localhost", "root", "maks1234", "rush00");

            if (mysqli_connect_errno()) {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            $login = $_POST['login'];
            $email = $_POST['email'];
            $passwd = hash('whirlpool', $_POST['passwd']);

            $logQuery = mysqli_query($link, "SELECT * FROM `users`");
            $flag = 1;
            while ($row = mysqli_fetch_array($logQuery)) {
                if ($row['login'] == $login) {
                    echo "Login is already in use";
                    $flag = 0;
                }
            }
            if ($flag === 1) {
                $Query = mysqli_query($link, "INSERT INTO `users` (login, email, password) VALUES ('$login', '$email', '$passwd')");
                $_SESSION['loggued_on_user'] = $login;
                header("location: index.php");
            }
        }
    }
?>
<div class="form">
    <form method="POST" action="">
        <fieldset>
            <legend>Create account</legend>
            <input type="text" name="login" placeholder="Login" value="" />
            <input type="email" name="email" placeholder="E-mail" value="" />
            <input type="password" name="passwd" placeholder="Password" value="" />
            <input type="password" name="conf_passwd" placeholder="Confirm Password" value="" />
        </fieldset>
        <input type="submit" name="submit" value="Sign In" />
    </form>
</div>
