<?php
  echo '<script type="text/javascript">

  var count = new Number();
  var count = 15;

  function start(){

    if ((count - 1) >= 0){
      count -= 1;
      if (count == 0) {
        count = "Redirecionando"';?>
      }else if(count < 10){
        count = "0"+count;
      }
      tempo.innerText=count;
      setTimeout('start();', 1000);

    }
  }

  </script>

</head>
  <body onload="start();">
    
      <p>Voce Sera Redirecionado ao Destino em   :
      </p>
      <div id="tempo" ></div>';
<?php
  ?>
  <?php
$redirecionar=$_POST['r'];
$cad = $_GET['r'];
$pesquisar = $_POST['r'];
$strcon = mysqli_connect('sql208.epizy.com','epiz_28208797','z6dbvjFRK8','epiz_28208797_redirects') or die('Erro ao conectar ao banco de dados');
$result_cursos = "SELECT * FROM encurtaurl WHERE EncrtaUrl LIKE '%$pesquisar%' LIMIT 1";
$resultado_cursos = mysqli_query($strcon, $result_cursos);
$redirecturl =$rows_cursos['URL'];
$redircount=mysqli_num_rows($resultado_cursos);
if (empty($_POST['r'])){
    echo " URL EM BRANCO ";

}
elseif($redircount != 0){
while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
        $REDIRUR = $rows_cursos['URL'];
	}
}
else{
    $REDIRUR= $redirecionar;
}
$HORASS =time();
$kkey01=md5(time());
$capkey=$kkey01.md5($post);

?>
<meta http-equiv="refresh" content="15; URL='http://<?= $REDIRUR ?>?capkey=<?= $capkey ?>&startkey=<?= $_POST['token'] ?>&tempcache=<?= $HORASS ?>&key=<?= $_GET['pornkey'] ?>'"/>
<p> Redirecionado Voce a http://<?= $REDIRUR ?> </p>
