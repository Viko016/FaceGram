<?php
//Indice que controla el número de publicación
$i=19;

//Variables para obtener los datos almacenados en PagAgregarComentarios
$titulo=$_POST["titulo"];
$contenido=$_POST["contenido"];
$categoria=$_POST["categoria"];
date_default_timezone_set('America/Mexico_City');
$fecha_actual = date("h:i A, d/m/Y ");

/*--Condicional en caso de que la publicacion se quiera agregar a la pestaña perfil--*/
    if($categoria=="Perfil")
    {
    // Contenido que se va agregar en el apartado Perfil
    $contenido_nuevo = "

            <div class=\"publicacion\">
                <div class=\"fecha-hora\">
                    <input type=\"hidden\" name=\"fecha-hora$i\" value=\"$fecha_actual\">$fecha_actual
                </div>
                <div class=\"Tema$i\">
                    <input type=\"hidden\" name=\"tema$i\" value=\"Perfil\"> <i class=\"fa fa-user\"></i> $_COOKIE[CookiePrueba] 
                </div>
                <div class=\"titulo\">
                    <input type=\"hidden\" name=\"titulo$i\" value=\"$titulo\">$titulo
                </div>
                <div class=\"contenido\">
                    <input type=\"hidden\" name=\"contenido$i\" value=\"$contenido\">$contenido
                </div>
                <div class=\"acciones\">
                    <button type=\"submit\" name=\"boton\" value=\"$i\"><i class=\"far fa-comment\" id=\"boton$i\"></i> Comentar</button>
                    <button type=\"button\" onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
                    <span class=\"contadorlike\">0</span>
                    <button type=\"button\" onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
                    <span class=\"contadordislike\">0</span>
                </div>
            </div>
            ";
    // Redirige a la página principal de la categoria
    header("Location:http://localhost/AskMe/PagPerfilAskMe.php");
    }
/*--------------------------------------------------------------------------------------*/

/*--Condicional en caso de que la publicacion se quiera agregar a la pestaña deportes--*/
    else if($categoria=="Deportes")
    {
    // Contenido que se va agregar en el apartado Deportes
    $contenido_nuevo = "

            <div class=\"publicacion\">
                <div class=\"fecha-hora\">
                    <input type=\"hidden\" name=\"fecha-hora$i\" value=\"$fecha_actual\">$fecha_actual
                </div>
                <div class=\"Tema$i\">
                    <input type=\"hidden\" name=\"tema$i\" value=\"$categoria\"> Tema: <i class=\"fa fa-futbol\"></i> $categoria 
                </div>
                <div class=\"titulo\">
                    <input type=\"hidden\" name=\"titulo$i\" value=\"$titulo\">$titulo
                </div>
                <div class=\"contenido\">
                    <input type=\"hidden\" name=\"contenido$i\" value=\"$contenido\">$contenido
                </div>
                <div class=\"acciones\">
                    <button type=\"submit\" name=\"boton\" value=\"$i\"><i class=\"far fa-comment\"></i> Comentar</button>
                    <button type=\"button\" onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
                    <span class=\"contadorlike\">0</span>
                    <button type=\"button\" onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
                    <span class=\"contadordislike\">0</span>
                </div>
            </div>
            ";
    /*--APARTADO AGREGAR PUBLICACION A VIDEOJUEGOS--*/
    $deportes = "PagDeportesAskMe.html";
    /* Busca la posición donde se agregara el contenido nuevo:
    Obteniendo la posicion del string "strpos($contenido_obtenido,'string al que se quiere acceder')" 
    y la suma a la longitud "strlen('string al que se quiere acceder')" de este para obtener la posicion final*/
    $contenido_deportes = file_get_contents($deportes);
    /* Busca la posición donde se agregara el contenido nuevo:
    Obteniendo la posicion del string "strpos($contenido_obtenido,'string al que se quiere acceder')" 
    y la suma a la longitud "strlen('string al que se quiere acceder')" de este para obtener la posicion final*/
    $posicion_deportes = strpos($contenido_deportes, '<div class="publicaciones">') + strlen('<div class="publicaciones">');
    /* Inserta el contenido nuevo en la posición deseada 
    "substr_replace($contenido_obtenido, $contenido_que_se_desea_agregar, $posicion_string)"*/
    $contenido_actualizado_deportes = substr_replace($contenido_deportes, $contenido_nuevo, $posicion_deportes, 0);
    // Escribe el contenido actualizado en el archivo que accedio file_put_contents($pagina_a_acceder, $contenido_actualizado)
    file_put_contents($deportes, $contenido_actualizado_deportes);
    /*--------------------------------------------------------------------------------------*/
    // Redirige a la página principal de la categoria
    header("Location:http://localhost/AskMe/$deportes");
    }
    /*--------------------------------------------------------------------------------------*/

/*--Condicional en caso de que la publicacion se quiera agregar a la pestaña videojuegos--*/
    else if($categoria=="Videojuegos")
    {
    // Contenido que quieres agregar
    $contenido_nuevo = "
    
            <div class=\"publicacion\">
                <div class=\"fecha-hora\">
                    <input type=\"hidden\" name=\"fecha-hora$i\" value=\"$fecha_actual\">$fecha_actual
                </div>
                <div class=\"Tema$i\">
                    <input type=\"hidden\" name=\"tema$i\" value=\"$categoria\"> Tema: <i class=\"fa fa-gamepad\"></i> $categoria 
                </div>
                <div class=\"titulo\">
                    <input type=\"hidden\" name=\"titulo$i\" value=\"$titulo\">$titulo
                </div>
                <div class=\"contenido\">
                    <input type=\"hidden\" name=\"contenido$i\" value=\"$contenido\">$contenido
                </div>
                <div class=\"acciones\">
                    <button type=\"submit\" name=\"boton\" value=\"$i\"><i class=\"far fa-comment\"></i> Comentar</button>
                    <button type=\"button\" onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
                    <span class=\"contadorlike\">0</span>
                    <button type=\"button\" onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
                    <span class=\"contadordislike\">0</span>
                </div>
            </div>
            ";
    /*--APARTADO AGREGAR PUBLICACION A VIDEOJUEGOS--*/
    //Variable que almacena el nombre de la pagina a acceder
    $videojuegos = "PagVideojuegosAskMe.html";
    /* Busca la posición donde se agregara el contenido nuevo:
    Obteniendo la posicion del string "strpos($contenido_obtenido,'string al que se quiere acceder')" 
    y la suma a la longitud "strlen('string al que se quiere acceder')" de este para obtener la posicion final*/
    $contenido_videojuegos = file_get_contents($videojuegos);
    /* Busca la posición donde se agregara el contenido nuevo:
    Obteniendo la posicion del string "strpos($contenido_obtenido,'string al que se quiere acceder')" 
    y la suma a la longitud "strlen('string al que se quiere acceder')" de este para obtener la posicion final*/
    $posicion_videojuegos = strpos($contenido_videojuegos, '<div class="publicaciones">') + strlen('<div class="publicaciones">');
    /* Inserta el contenido nuevo en la posición deseada 
    "substr_replace($contenido_obtenido, $contenido_que_se_desea_agregar, $posicion_string)"*/
    $contenido_actualizado_videojuegos = substr_replace($contenido_videojuegos, $contenido_nuevo, $posicion_videojuegos, 0);
    // Escribe el contenido actualizado en el archivo que accedio file_put_contents($pagina_a_acceder, $contenido_actualizado)
    file_put_contents($videojuegos, $contenido_actualizado_videojuegos);
    // Redirige a la página principal de la categoria
    header("Location:http://localhost/AskMe/$videojuegos");
    /*--------------------------------------------------------------------------------------*/
    }
/*--------------------------------------------------------------------------------------*/

    else if($categoria=="Top")
    {
    // Contenido que quieres agregar
    $contenido_nuevo = "
            <div class=\"publicacion\">
                <div class=\"fecha-hora\">
                    <input type=\"hidden\" name=\"fecha-hora$i\" value=\"$fecha_actual\">$fecha_actual
                </div>
                <div class=\"Tema$i\">
                    <input type=\"hidden\" name=\"tema$i\" value=\"$categoria\"> Tema: <i class=\"fa fa-fire\"></i> $categoria 
                </div>
                <div class=\"titulo\">
                    <input type=\"hidden\" name=\"titulo$i\" value=\"$titulo\">$titulo
                </div>
                <div class=\"contenido\">
                    <input type=\"hidden\" name=\"contenido$i\" value=\"$contenido\">$contenido
                </div>
                <div class=\"acciones\">
                    <button type=\"submit\" name=\"boton\" value=\"$i\"><i class=\"far fa-comment\"></i> Comentar</button>
                    <button type=\"button\" onclick=\"sumarLike(this)\"><i class=\"far fa-thumbs-up\"></i> Like</button>
                    <span class=\"contadorlike\">0</span>
                    <button type=\"button\" onclick=\"sumarDislike(this)\"><i class=\"far fa-thumbs-down\"></i> Dislike</button>
                    <span class=\"contadordislike\">0</span>
                </div>
            </div>";

    /*--APARTADO AGREGAR PUBLICACION A TOP--*/
    //Variable que almacena el nombre de la pagina a acceder
    $top = "PagTopAskMe.html";
    /* Busca la posición donde se agregara el contenido nuevo:
    Obteniendo la posicion del string "strpos($contenido_obtenido,'string al que se quiere acceder')" 
    y la suma a la longitud "strlen('string al que se quiere acceder')" de este para obtener la posicion final*/
    $contenido_top = file_get_contents($top);
    /* Busca la posición donde se agregara el contenido nuevo:
    Obteniendo la posicion del string "strpos($contenido_obtenido,'string al que se quiere acceder')" 
    y la suma a la longitud "strlen('string al que se quiere acceder')" de este para obtener la posicion final*/
    $posicion_top = strpos($contenido_top, '<div class="publicaciones">') + strlen('<div class="publicaciones">');
    /* Inserta el contenido nuevo en la posición deseada 
    "substr_replace($contenido_obtenido, $contenido_que_se_desea_agregar, $posicion_string)"*/
    $contenido_actualizado_top = substr_replace($contenido_top, $contenido_nuevo, $posicion_top, 0);
    // Escribe el contenido actualizado en el archivo que accedio file_put_contents($pagina_a_acceder, $contenido_actualizado)
    file_put_contents($top, $contenido_actualizado_top);
    // Redirige a la página principal de la categoria
    header("Location:http://localhost/AskMe/$top");
    /*--------------------------------------------*/
    }
    /*--------------------------------------------------------------------------------------*/

//Iteración para el indice    
$i++;

/*--APARTADO AGREGAR PUBLICACION A PERFIL--*/
//Variable que almacena el nombre de la pagina a acceder
$perfil = "PagPerfilAskMe.php";
// Lee el contenido actual del archivo "file_get_contents($pagina_a_acceder)"
$contenido_perfil = file_get_contents($perfil);
/* Busca la posición donde se agregara el contenido nuevo:
Obteniendo la posicion del string "strpos($contenido_obtenido,'string al que se quiere acceder')" 
y la suma a la longitud "strlen('string al que se quiere acceder')" de este para obtener la posicion final*/
$posicion_perfil = strpos($contenido_perfil, '<div class="publicaciones">') + strlen('<div class="publicaciones">');
/* Inserta el contenido nuevo en la posición deseada 
"substr_replace($contenido_obtenido, $contenido_que_se_desea_agregar, $posicion_string)"*/
$contenido_actualizado_perfil = substr_replace($contenido_perfil, $contenido_nuevo, $posicion_perfil, 0);
// Escribe el contenido actualizado en el archivo que accedio file_put_contents($pagina_a_acceder, $contenido_actualizado)
file_put_contents($perfil, $contenido_actualizado_perfil);
/*--------------------------------------------*/

/*--APARTADO AGREGAR PUBLICACION A INICIO--*/
$inicio ="PagInicioAskMe.html";
// Leer el contenido actual del archivo HTML
$contenido_inicio = file_get_contents($inicio);
// Buscar la posición donde quieres agregar el contenido nuevo
$posicion_inicio = strpos($contenido_inicio, '<div class="publicaciones1">') + strlen('<div class="publicaciones1">');
// Insertar el contenido nuevo en la posición deseada
$contenido_actualizado_inicio = substr_replace($contenido_inicio, $contenido_nuevo, $posicion_inicio, 0);
// Escribir el contenido actualizado en el archivo HTML
file_put_contents($inicio, $contenido_actualizado_inicio);

/*--------------------------------------------*/

/*--APARTADO SUSTITUIR INDICE--*/
// Lee el contenido actual del archivo "file_get_contents($pagina_a_acceder)"
$archivo = "AlmacenarPublicacion.php";
// Leer el contenido actual del archivo
$contenido = file_get_contents($archivo);
// Realizar la modificación necesaria, por ejemplo, eliminar una línea específica
$nuevo_contenido = str_replace($i-1, $i, $contenido);
// Escribir el contenido actualizado en el archivo
file_put_contents($archivo, $nuevo_contenido);
/*--------------------------------------------*/
?>