<?php
session_start();
$token2 =$_GET['token'];
$captcha = substr(md5(md5($token2)),2,9);
$_SESSION['CODGERADO']=$token2;
$codigoCaptcha = $captcha;
$imagemCaptcha = imagecreatefrompng("fundocaptch.png");
$fonteCaptcha = imageloadfont("anonymous.gdf");
$corCaptcha = imagecolorallocate($imagemCaptcha, 0,98,215);
imagestring($imagemCaptcha, $fonteCaptcha, 15, 5, $codigoCaptcha, $corCaptcha);
imagepng($imagemCaptcha);
imagedestroy($imagemCaptcha);