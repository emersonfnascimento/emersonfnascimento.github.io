<!--acrescente na sua pagina principal substitua 3700 pelo tento que quiser em segundos-->
<?php
include 'contador.php';
   if (isset($_COOKIE['counte'])) {
      $counte = $_COOKIE['counte'] + 1;
  } else {
    $counte = 1;
    $a++;
}
setcookie('counte', "$counte", time()+3700);
$abre =@fopen("contador.php","w");
$ss ='<?php $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?>
 
e crie um arquivo no mesmo diretório chamado "contador.php"
 
<?php $a=0; ?>
