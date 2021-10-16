 <?php
 echo 'Aguarde Gerando Token De Autenticação';
    $uniquid=uniqid();
    $pornkey=md5(md5(md5($uniquid)));
    session_start();
    $_SESSION['token'] = $pornkey;
    setcookie("token",$pornkey);
  echo '<script type="text/javascript">

  var count = new Number();
  var count = 10;

  function start(){

    if ((count - 1) >= 0){
      count -= 1;
      if (count == 0) {
        count = "InternalIDToken='.$pornkey.'";'?>
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
    
      <p>Aguarde Gerando Token Interno  :
      </p>
      <div id="tempo" ></div>';
      <?php
        echo '<a class="bt bt-vd" href="./sys/not-robots?pornkey='.$pornkey.'"> Apenas Captcha</a>';
         echo '<a class="bt bt-az" href="./checagemdevalidadedekeys.pgp"> AutoGen /Check </a>';
        echo'<p> Codigo com Redirecionamento </p>';
      echo '
      <form action="./sys/not-robots" name="form" method="get">
      <p> Insira onde deseja parar se passar no teste( Sem o Http)</p>
   <input type="text" name="r" autocomplete="off" />
   <select name="pornkey">
  <option value='.$pornkey.'>InternalKey</option><selected>';
  echo ' <br><br>  <input class="bt bt-lj" type="submit" value="Testar Redirect" />
</form>'?>
<?php

  ?>
