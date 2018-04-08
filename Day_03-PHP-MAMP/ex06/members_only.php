<?php  
	$login = "zaz";
	$parol = "jaimelespetitsponeys";

	if ($_SERVER['PHP_AUTH_USER'] === $login && $_SERVER['PHP_AUTH_PW'] === $parol)
	{
?>
<html><body>Hello Zaz
<?php
	echo "<img src='data:image/png;base64, ";
	echo base64_encode(file_get_contents('img/42.png')) . "'>";
?>
</body></html>;
<?php
	}
	else
	{
	header("WWW-Authenticate: Basic realm=''Member area''");
    header("HTTP/1.0 401 Unauthorized");
?>
<html><body>That area is accessible for members only</body></html>

<?php
}
?>