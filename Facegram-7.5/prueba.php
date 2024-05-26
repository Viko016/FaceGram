<?php
$i=1;
if($i<1000){
// Nombre del archivo 
$archivo1 = "PagInicioAskMe.html";  
// Leer el contenido actual del archivo 
$contenido = file_get_contents($archivo1); 
// Realizar la modificación necesaria, por ejemplo, eliminar una línea específica 
$nuevo_contenido = str_replace("<button type=\"submit\" id=\"boton$i\">", "<button type=\"button\" id=\"boton$i\" onclick=\"AgregarComentario$i()\" >", $contenido); 
// Escribir el contenido actualizado en el archivo 
file_put_contents($archivo1, $nuevo_contenido);
}


?>