<?php
session_start();
$cap=$_SESSION['captcha'];
$iserido= $_POST['palavra'];
$post=$_POST['token'];
$key2= substr(md5(md5($post)),2,9);
$codgerado=$_SESSION['CODGERADO'];
$key9= substr(md5(md5($codgerado)),2,9);

if (($cap != $iserido)&&($key2 == $iserido) && ($key9 == $iserido)){
    echo "Token de Imagem Adulterado ";
}
elseif (($cap == $iserido)&&($key2 != $iserido) && ($key9 == $iserido)){
echo "Token de acesso Adulterado ";
}
elseif (($cap != $iserido)&&($key2 != $iserido) && ($key9 == $iserido)){
echo "Token de acesso Adulterado ";
}
elseif (($cap != $iserido)&&($key2 == $iserido) && ($key9 == $iserido)){
echo "Token de acesso Adulterado ";
}
elseif (($cap == $iserido)&&($key2 == $iserido) && ($key9 == $iserido)){
    echo "Voce Passou No Teste ";
    if(isset($_POST['r'])){
    include ('redir.php');
    }
    else{}
    
}
else {
    echo "Voce Falhou no teste ";
    
}
session_destroy();
$vogais = array('a','e','i','o','u');
$consoantes = array('b','c','d','f','g','h','nh','lh','ch','j','k','l','m','n','p','qu','r','rr','s','ss','t','v','w','x','y','z',);
$num = array('1','2','9','9','9','9','9','9','1','1','9','9','9','8','7','6','5','4','3','2','1','9','9','9','9','9',);

$palavra = '';
$tamanho_palavra = rand(30,50);
$contar_silabas = 0;
while($contar_silabas < $tamanho_palavra){
   $vogal = $vogais[rand(0,count($vogais)-1)];
   $consoante = $consoantes[rand(0,count($consoantes)-1)];
   $numa = $consoantes[rand(0,count($consoantes)-1)];
   $silaba = $consoante.$vogal.$numa;
   $palavra .=$silaba;
   $contar_silabas++;
   unset($vogal,$consoante,$silaba);
}
//echo '<br><br><br>Sua Id é '.md5($post).$palavra.uniqid().$post;
unset($vogais,$consoantes,$palavra,$tamanho_palavra,$contar_silabas);