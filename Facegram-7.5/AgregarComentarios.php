<?php
$i=$_POST["Iteracion"];
    $Comentario=$_POST["seccion-agregar-comentario"];
    date_default_timezone_set('America/Mexico_City');
    $fecha_actual = date("h:i A, d/m/Y ");
    $PagComent="PagComentario$i.html";
    // Contenido que quieres agregar
    $contenido_nuevo = "
            <div class=\"comentario\">
                <div class=\"fecha-hora\">$fecha_actual</div>
                <div class=\"titulo\"> <i class=\"fa fa-user\"></i> $_COOKIE[CookiePrueba] </div>
                <div class=\"contenido\">
                    $Comentario
                </div>
                <div class=\"acciones\">
                    <button onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
                    <span class=\"contadorlike\">0</span>
                    <button onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
                    <span class=\"contadordislike\">0</span>
                </div>
            </div>
            ";
    //Perfil
    // Leer el contenido actual del archivo HTML
    $contenido_PagComent = file_get_contents($PagComent);
    // Buscar la posición donde quieres agregar el contenido nuevo
    $posicion_PagComent = strpos($contenido_PagComent, '<div class="comentariosesqueleto">') + strlen('<div class="comentariosesqueleto">');
    // Insertar el contenido nuevo en la posición deseada
    $contenido_actualizado_PagComent = substr_replace($contenido_PagComent, $contenido_nuevo, $posicion_PagComent, 0);
    // Escribir el contenido actualizado en el archivo HTML
    file_put_contents($PagComent, $contenido_actualizado_PagComent);
    header("Location: http://localhost/AskMe/PagComentario{$i}.html");
?>