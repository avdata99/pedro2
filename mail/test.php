<?php
include_once 'avisador.php';

$v=new avisador();

$r = $v->avisar('Prueba de email', '<br/>hola <span style="color:red">hola</span><br/>hola <span style="color:red">hola</span><br/>hola <span style="color:red">hola</span>');

echo 'Se envio:'.$r;
?>
