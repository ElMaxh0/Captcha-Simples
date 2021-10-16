<?php
session_start();
$key= md5(uniqid());
$palavra = substr(md5(md5($key)),2,9);
$_SESSION['captcha'] = $palavra;
setcookie("key", $key);
echo '<img src="data.php?token='.$key.'">';