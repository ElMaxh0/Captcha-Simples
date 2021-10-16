<?php
$uniquid=uniqid();
$pornkey=md5(md5(md5($uniquid)));
session_start();
$_SESSION['token'] = $pornkey;
setcookie("token",$pornkey);
$capkey=$_GET['capkey'];
$startkey=$_GET['startkey'];
$horario=$_GET['tempcache'];
$keystart=$_GET['key'];
if(isset($capkey)){
$HORASSmax =$horario+30;
$HORASSATUAL =time();
$chave01=md5($horario);
$capkey01=$chave01.md5($startkey);
if(($HORASSATUAL < $HORASSmax) && ($capkey01==$capkey)&&($_COOKIE['authalehotcaptcha'] == $_GET['key'])){
    echo "Seção Criada com Sucesso ";
    echo "<br>";
    echo "Token Legitimo ";
    echo '<br>';
    echo '<a class="bt bt-lj" href="./"> Nova Consulta AutoGen /Check </a>';
    echo '<br>';
    echo '<a class="bt bt-az" href="../"> Retornar Ao Inicio </a>';
    unsetcookie('authalehotcaptcha');
    setcookie("resoluteidalehotcaptcha", $capkey);
    setcookie("condition", "true");
	$ALEHOTPASS= "TRUE";
	$_SESSION['alehotpassed']="TRUE";
}
else {
    echo 'Nao Ha Validade em seus dados ';
    echo '<br>';
    echo '<a class="bt bt-lj" href="./"> Nova Consulta AutoGen /Check </a>';
    echo '<br>';
    echo '<a class="bt bt-az" href="../"> Retornar Ao Inicio </a>';
}
}
else{
    echo "Gerando Tokens de autenticação em Nosso Database ";
    setcookie("authalehotcaptcha", $pornkey);
     ?>
    <meta http-equiv="refresh" content="5; URL='http://captcha-123alehot.a0001.net/beta_0.2/api_alehotcaptcha_load.pgp/sys/not-robots/?r=alehotcaptcha-api-key02&pornkey=<?= $pornkey ?>'"/>
    <?
}
?>
