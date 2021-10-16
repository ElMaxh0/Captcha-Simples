<!DOCTYPE html>
<html lang="pt-BR">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AntiBots</title>
    <link rel='stylesheet' href='./css/sfontes.css'>
    <style>
        body {
            background: rgb(70, 142, 236);
            font: normal 15pt Arial;
            margin: 0 auto;
            width:100%;
        }

        header {
            color: white;
            text-align: center;
        }

<?php
//Diferencia acesso mobile de pc
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");

if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian == true) {
    echo 'section {
            background: white;
            border-radius: 10px;
            padding: 15px;
            width: 300px;
            margin: auto;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.555);
        }';
} else {
    echo 'section {
            background: white;
            border-radius: 10px;
            padding: 15px;
            width: 600px;
            margin: auto;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.555);
        }';
}
?>

        footer {
            color: white;
            text-align: center;
            font-style: italic;
        }
        div {
            text-align: center;
        }
        .bt {
border:1px solid #25692A;
border-radius:4px;
display:inline-block;
cursor:pointer;
font-family:Verdana;
font-weight:bold;
font-size:13px;
padding:6px 10px;
text-decoration:none;
} 

.bt-vd {
border-color:#68b465;
background:linear-gradient(to bottom, #abd5aa 5%, #68b465 100%);
box-shadow:inset 0px 1px 0px 0px #e3f1e3;
color:#fff;
text-shadow:0px 1px 0px #528009;
}

.bt-lj {
border-color:#eb9b48;
background:linear-gradient(to bottom, #f7d6b3 5%, #eb9b48 100%);
box-shadow:inset 0px 1px 0px 0px #fdf7f0;
color:#333;
text-shadow:0px 1px 0px #ffee66;
}

.bt-az {
border-color:#46a7f5;
background:linear-gradient(to bottom, #86c6f8 5%, #46a7f5 100%);
box-shadow:inset 0px 1px 0px 0px #d7ecfd;
color:#fff;
text-shadow:0px 1px 0px #528009;  
}

.bt-vm {
border-color:#f61f0e;
background:linear-gradient(to bottom, #fca8a1 5%, #f61f0e 100%);
box-shadow:inset 0px 1px 0px 0px #fff4f3;
color:#fff;
text-shadow:0px 1px 0px #528009; 
}

.bt-vd:hover {
background:linear-gradient(to bottom, #68b465 5%, #abd5aa 100%);
}

.bt-lj:hover {
background:linear-gradient(to bottom, #eb9b48 5%, #f7d6b3 100%);
}

.bt-az:hover {
background:linear-gradient(to bottom, #46a7f5 5%, #86c6f8 100%);
}

.bt-vm:hover {
background:linear-gradient(to bottom, #f61f0e 5%, #fca8a1 100%);
}

.bt:active {
position:relative;
top:2px;}
<style>
body.a {
  background-image: url(
      
  );
}
</style>

    </style>
</head>
<body>
    <header>
        <h1>Antibots Service</h1>        
    </header>
    <section>
        <div>
<?php
include ('check.php');
?>
</br><<br>
<a class="bt bt-lj" href="./">Novo Capcha </a> 
</div>
        <div id="res">
        </div>
    </section>
    <footer>
        <p> CleanCode &copy; - CSS/    Codes</p>
		<p> AleHot BR &copy; - PHP/CSS Codes</p>
    </footer>
    <script>