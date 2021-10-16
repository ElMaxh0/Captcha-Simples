<?php
$redir=$_GET['r'];
echo '<h1> Antibots AleHot Service </h1>';
include ('cap.php');
echo '
<form action="../../check/minimal/?pornkey='.$_GET['pornkey'].'" name="form" method="post">
   <input type="text" name="palavra" autocomplete="off"  /><br>
   <select name="token">
  <option value='.$key.'>Aplicação Interna</option><selected>
</select><br>';
if (isset($_GET['r'])){
  echo ' <select name="r">
  <option value='.$redir.'>Redirecionamento Padrao</option><selected>
</select><br>';
}
else{

}
echo '
   <input class "bt bt-vd" type="submit" value="Validar Captcha" />
</form>
';
?>