<?php

$numeros = [1, 2, 3, 4, 5];

echo "do while------<br>";
$index = 0;

do {
    echo $numeros[$index] . "<br>";
    $index++;
} while ($index < count($numeros));

echo "foreach------<br>";
foreach ($numeros as $valor) {
    echo $valor . "<br>";
}

echo "foreach con índice------<br>";
foreach ($numeros as $index => $valor) {

    // Descomenta una de estas líneas para probar su efecto:

    // if ($index == 2) break;    // Detiene el bucle al llegar al índice 2
    // if ($index == 2) continue; // Salta el índice 2 y sigue con el resto

    echo "$index: $valor<br>";
}

?>
