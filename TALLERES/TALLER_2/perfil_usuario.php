<?php
$nombre_completo = "Jonathan Campos";
$edad = 28;
$correo = "jonathan.campos@utp.ac.pa";
$telefono = "61467298";

define("OCUPACION", "Estudiante");

echo "Hola, Mi nombre es " . $nombre_completo . " y ";
print "Tengo $edad años, ";
printf("si necesitas contactarme puedes escribirme a mi 
        correo electronico: %s o a llamarme a mi celular: %d.", $correo, $telefono);
echo " Actualmente soy " . OCUPACION . " en la Universidad Tecnológica de Panamá.<br>";

//
echo "<br>Mostrando tipo y valor con var_dump:<br>";
var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(OCUPACION);
echo "<br>";

?>