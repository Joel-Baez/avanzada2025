<?php
function saludar($nombre): string
{
    return "Hola $nombre";
}

function saludo($nombre=null): void
{
    echo "Hola $nombre";
}

echo saludar( "Pepe");
echo '<br>';
saludo( "Ana");
echo '<br>';
saludo();

function sumar(...$valores): int
{
    $rst1 = 0;
    for ($i = 0; $i < count($valores); $i++) {
        $rst1 += $valores[$i];
    }
    return $rst1;
}
echo '<br>';
echo sumar( 1, 2, 3, 4);
?>

