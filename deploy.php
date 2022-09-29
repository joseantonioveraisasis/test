<?php 
    /** 
     * GIT DEPLOYMENT SCRIPT 
     * 
     * Usado para implementar automáticamente sitios web a través de GitHub 
     * 
     */ 

    // matriz de comandos 
    $comandos = matriz( 
        'echo $PWD', 
        'sudo whoami', 
        'sudo git pull', 
        'sudo git status ', 
        'sincronización de submódulo de git', 
        'actualización de submódulo de git', 
        'estado de submódulo de git', 
    ); 

    // comandos exec 
    $salida = ''; 
    foreach($comandos AS $comando){ 
        $tmp = "xxxxxxxxxxx";
        
        $salida .= "<span style=\"color: #6BE234;\">\$</span><span style=\"color: #729FCF;\">{$comando}\n</span>< br />"; 
        $salida .= htmlentities(trim($tmp)) . "\n<br /><br />"; 
    } 
?> 

<!DOCTYPE HTML> 
<html lang="en-US"> 
<head> 
    <meta charset="UTF-8"> 
    <title>GUIÓN DE IMPLEMENTACIÓN GIT</title> 
</head> 
<body style=" color de fondo: #000000; color: #FFFFFF; grosor de fuente: negrita; relleno: 0 10px;"> 
<div style="width:700px"> 
    <div style="float:left;width:350px;"> 
    <p estilo="color:blanco;