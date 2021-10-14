 
<?php

$tabla = array(
    "fila 1" => array ("columna1.1","columna1.2", "columna1.3"),
    "fila 2" => array("columna2.1","columna2.2"),
    "fila 3" => array("columna3.1","columna3.2", "columna3.3"),
    //"elemento1", "elemento2","elemento3","hola", "mundo","cada","dia", "es","peor"

);

foreach($tabla as $clave => $array){

        foreach($array as $columna){
            echo "$clave -->".$columna."</br>";
        }
 
}
