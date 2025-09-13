<?php
$edad = 21;

switch ($edad) {
    case 18:
        echo "Tienes 18 años";
        break;
    case 20:
        echo "Tienes 20 años";
        break;
    case 21:
        echo "Tienes 21 años";
        break;
    default:
        // código si no coincide ningún caso
        echo "Edad no especificada";
        break;
}
?>