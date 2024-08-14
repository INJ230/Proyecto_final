<?php

    $ruta  =!empty($_GET['url']) ? $_GET['url'] : 'Home/index';
    $array = explode('/', $ruta);
    $controlador = $array[0];
    $metodo = "index";
    $parametros = "";
    if (!empty($array[1])) {
        if ($array[1] != "") {
            $metodo = $array[1];
        }
    }
    if (!empty($array[2])){
        if ($array[1] != "") {
            for ($i=2; $i < count($array); $i++) { 
                $parametros .= $array[$i].',';
            }
            $parametros = trim($parametros, ',');
        }
    }
    print_r($parametros);

?>