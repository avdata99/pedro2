<?php

    include_once 'mail/avisador.php';
    $ml=new avisador();
    $txt="Se ha descargado PDF <b>Pedro II</b><br/>";    

    $ip = $_SERVER['REMOTE_ADDR'];
    $txt .= "IP del cliente: ".$ip.'<br/>';    
    //$txt .= 'PAIS:'.$country.'<br/>';    
    $txt .= 'NOMBRE:'.$_POST['nombre'].'<br/>';
    $txt .= 'EMAIL: '.$_POST['email'].'<br/><br/>';
    $txt .= 'COMENTARIOS: <b>'.$_POST['coment'].'</b><br/><br/>';
    $txt .= 'No responda este correo, es solo una notificacion<br/>';
    try {
        $r = $ml->avisar('Se ha descargado Pedro II', $txt);
    } catch (Exception $e) {
        # $error = $ml->lastError;
    }
    
    //$f = "pedroII/pedroII-parte1.pdf";
    $f = "pedroII-2012/pedro_II.pdf";
    //header("Content-type: application/octet-stream");//dice que es binario / exe
    header("Content-type: application/pdf");
    //header("Content-Disposition: attachment; filename=\"$f\"\n");
    header("Content-Disposition: attachment; filename=\"pedroII-ultimopapa.pdf\"\n");

    /*$fp=fopen("$f", "r");
    fpassthru($fp);*/
    readfile($f);//asi suguiere php.net

    echo "<br/><br/><br/>El libro se descargo correctamente ! <br/><br/><a href='index.php'>volver a Pedro II</a><br/>$r";
?>
